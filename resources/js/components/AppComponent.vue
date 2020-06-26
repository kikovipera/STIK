<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <form-component/>

                <table-component :records="records"/>

                <pagination-component :pagination="pagination" />

            </div>
        </div>
    </div>
</template>

<script>

    import FormComponent from "./FormComponent";
    import TableComponent from "./TableComponent";
    import PaginationComponent from "./PaginationComponent";
    export default {
        components: {PaginationComponent, TableComponent, FormComponent},
        props: {
            records: {
            type: Array
            },
            pagination: {
                type: Object
            }
        }
    }
</script>
