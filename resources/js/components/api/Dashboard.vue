<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">get</span>/api/orders</p>
        </h4>
        <table class="table table-responsive col-md-12">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Order Number</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order in orders">
                <th scope="row">
                    {{order.id}}
                </th>
                <td>{{order.order_number}}</td>
                <td>{{order.created_at}}</td>
                <td>{{order.updated_at}}</td>
                <td>{{order.deleted_at}}</td>
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
                orders: ''
            }
        },
        methods: {
            async getEndpointData() {
                const response = await this.runAPI("http://localhost:8000/api/orders");
                this.orders = response.data;
            }
        },
        beforeMount() {
            this.getEndpointData();
        }
    }

</script>
