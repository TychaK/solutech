<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">get</span>/api/order_details</p>
        </h4>
        <table class="table table-responsive col-md-12">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Order Id</th>
                <th scope="col">Product Id</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order_detail in order_details">
                <th scope="row">
                    {{order_detail.id}}
                </th>
                <th scope="row">
                    {{order_detail.order_id}}
                </th>
                <th scope="row">
                    {{order_detail.product_id}}
                </th>
                <td>{{order_detail.created_at}}</td>
                <td>{{order_detail.updated_at}}</td>
                <td>{{order_detail.deleted_at}}</td>
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
                order_details: ''
            }
        },
        methods: {
            async getEndpointData() {
                const response = await this.runAPI("http://localhost:8000/api/order_details");
                this.order_details = response.data;
            }
        },
        beforeMount() {
            this.getEndpointData();
        }
    }
</script>
