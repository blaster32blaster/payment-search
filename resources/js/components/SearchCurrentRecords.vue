<template>
  <div class="autocomplete">
    <input
      type="text"
      @input="onChange"
      v-model="search"
      @keydown="searchForData"
      @keydown.down="onArrowDown"
      @keydown.up="onArrowUp"
      @keydown.enter="onEnter"
    />
    <ul
      id="autocomplete-results"
      v-show="isOpen"
      class="autocomplete-results"
    >
      <li
        class="loading"
        v-if="isLoading"
      >
        Loading results...
      </li>
      <li
        v-else
        v-for="(result, i) in results"
        :key="i"
        @click="setResult(result)"
        class="autocomplete-result"
        :class="{ 'is-active': i === arrowCounter }"
      >
        {{ result }}
      </li>
    </ul>
    <div v-if="validRecord" class="export-button-wrapper">
        <button
            class="btn btn-ternery"
            type="button"
            @click="exportData"
        >
            Export Results to Excel
        </button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'autocomplete',

    props: {
      isAsync: {
        type: Boolean,
        required: false,
        default: false,
      },
    },

    data() {
      return {
        isOpen: false,
        results: [],
        search: '',
        isLoading: false,
        arrowCounter: 0,
        items: {
            type: Array,
            required: false,
            default: () => [],
        },
        validRecord: false,
      };
    },

    methods: {
        exportData () {
                axios.post('/api/export', {
                    'searchstring': this.search
                }, {
                    responseType: 'blob'
                })
                .then(response => {
                    const url = URL.createObjectURL(new Blob([response.data], {
                        type: 'application/vnd.ms-excel'
                    }))
                    const link = document.createElement('a')
                    link.href = url
                    link.setAttribute('download', 'paymentdata.xlsx')
                    document.body.appendChild(link)
                    link.click()
                })
                .catch(error => {
                    console.log('exporting data error')
                    console.log(error)
                });
        },
        searchForData () {
                let input = this.search

                if (input.length < 2) {
                    return [];
                }
                axios.post('/api/search', {
                    'searchstring': input
                })
                    .then(response => {
                        this.items = response.data;
                    })
                    .catch(error => {
                        console.log('fetching search data error')
                    });
            },
      onChange() {
        // Is the data given by an outside ajax request?

        if (this.isAsync) {
          this.isLoading = true;
        } else {
          // Let's  our flat array
          this.filterResults();
          this.isOpen = true;
          this.validRecord = false;
        }
      },

      filterResults() {
        // first uncapitalize all the things
        if (!this.items.length > 0) {
            return;
        }
        this.results = this.items.filter((item) => {
          return item.toLowerCase().indexOf(this.search.toLowerCase()) > -1;
        });
      },
      setResult(result) {
        this.search = result;
        this.isOpen = false;
        this.validRecord = true;
      },
      onArrowDown(evt) {
        if (this.arrowCounter < this.results.length) {
          this.arrowCounter = this.arrowCounter + 1;
        }
      },
      onArrowUp() {
        if (this.arrowCounter > 0) {
          this.arrowCounter = this.arrowCounter -1;
        }
      },
      onEnter() {
        this.search = this.results[this.arrowCounter];
        this.isOpen = false;
        this.arrowCounter = -1;
        this.validRecord = true;
      },
      handleClickOutside(evt) {
        if (!this.$el.contains(evt.target)) {
          this.isOpen = false;
          this.validRecord = false;
          this.arrowCounter = -1;
        }
      }
    },
    watch: {
      items: function (val, oldValue) {
        // actually compare them
        if (val.length !== oldValue.length) {
          this.results = val;
          this.isLoading = false;
        }
      },
    },
    mounted() {
      document.addEventListener('click', this.handleClickOutside)
    },
    destroyed() {
      document.removeEventListener('click', this.handleClickOutside)
    }
  };
</script>
<style>
  .autocomplete {
    position: relative;
  }

  .autocomplete-results {
    padding: 0;
    margin: 0;
    border: 1px solid #eeeeee;
    height: 120px;
    overflow: auto;
    width: 100%;
  }

  .autocomplete-result {
    list-style: none;
    text-align: left;
    padding: 4px 2px;
    cursor: pointer;
  }

  .autocomplete-result.is-active,
  .autocomplete-result:hover {
    background-color: #4AAE9B;
    color: white;
  }

  .btn-ternery {
      background-color: orangered;
      color:white;
      margin: 1rem;
  }

</style>
