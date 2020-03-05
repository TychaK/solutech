<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">get</span>/api/products</p>
        </h4>
        <table class="table table-responsive col-md-12">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="supplier in suppliers">
                <th scope="row">
                    {{supplier.id}}
                </th>
                <th scope="row">
                    {{supplier.name}}
                </th>
                <td>{{supplier.created_at}}</td>
                <td>{{supplier.updated_at}}</td>
                <td>{{supplier.deleted_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    import runAPI from "../mixings/Get.js";

    export default {
        mixins: [runAPI],
        props: ['token'],
        data: function () {
            return {
                suppliers: ''
            }
        },
        methods: {
            async getEndpointData() {
                const response = await this.runAPI("http://localhost:8000/api/suppliers");
                this.suppliers = response.data;
            }
        },
        beforeMount() {
            this.getEndpointData();
        }
    }
</script>
