<!-- <template> -->
    <!-- <div class="root-search-wrapper"> -->
        <!-- <h4> -->
            <!-- Search Existing Records -->
        <!-- </h4> -->
        <!-- <input
            type="text"
            v-model="searchString"
            placeholder="Enter Search Parameters"
            v-on:keydown="search"
        /> -->
        <!-- <autocomplete
            :search="search"
            placeholder="Enter Search Parameters"
            aria-label="Enter Search Parameters"
        ></autocomplete> -->
        <!-- <vue-bootstrap-typeahead
            v-model="query"
            :data="data"
            size="lg"
            :serializer="s => s.text"
            placeholder="Enter Search Params"
            @hit="selectedAddress = $event"
        />
    </div>
</template> -->

<!-- <script>
//     import VueBootstrapTypeahead from 'vue-bootstrap-typeahead'
//     export default {
//          components: {
//              VueBootstrapTypeahead
//         },
//         props: {

//         },
//         data() {
//             return {
//                 query: '',
//                 data: [],
//                 searchString: null,
//             }
//         },
//         methods: {
//             search (input) {
//                 // console.log(input.length)
//                 if (input.length < 2) {
//                     return [];
//                 }
//                 // if (this.searchString < 2) {
//                 //     return [];
//                 // }
//                 axios.post('/api/search', {
//                     'searchstring': input
//                 })
//                     .then(response => {
//                         console.log(response.data)
//                         this.data = response.data;
//                         // return response.data.Submitting_Applicable_Manufacturer_GPO_Name
//                     })
//                     .catch(error => {
//                         console.log('fetching search data error')
//                     });
//             },
//         },
//         watch: {
//             query: _.debounce(function(input) { this.search(input) }, 500)
//         },
//         mounted() {
//         }
//     }
// </script>
