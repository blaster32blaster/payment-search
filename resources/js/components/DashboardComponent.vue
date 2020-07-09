<template>
    <div class="container main-dashboard-card">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to Payment Data Search</div>

                    <div class="card-body">
                        <div class="card-body-main col-md-12">
                            <div class="dashboard-componenet-wrapper">
                                <importer
                                    @successImport="successDataImport"
                                >
                                </importer>
                            </div>
                            <div class="dashboard-componenet-wrapper">
                                <numrecords
                                    :numberrecords="records"
                                >
                                </numrecords>
                            </div>
                            <div class="dashboard-componenet-wrapper">
                                <search
                                >
                                </search>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import importer from './ImportDataComponent';
    import numrecords from './NumberOfCurrentRecords';
    import search from './SearchCurrentRecords';
    export default {
        components: {
            importer,
            numrecords,
            search
        },
        props: {
            num_records: {
                default: 0,
                type: Number
            }
        },
        data() {
            return {
                messages: [],
                records: 0
            }
        },
        methods: {
            successDataImport () {
                axios.get('/api/record-count')
                    .then(response => {
                        this.records = response.data
                    })
                    .catch(error => {
                        console.log('fetching count error')
                    });
            }
        },
        mounted() {
            this.successDataImport();
        }
    }
</script>
