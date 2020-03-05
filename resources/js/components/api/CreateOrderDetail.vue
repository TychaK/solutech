<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">POST</span>/api/order_details</p>
        </h4>
        <div class="fa-border p-5">
            <form id="create-order-form" @submit="createOrder" method="POST" action="">
                <label>Access Token</label>
                <textarea class="form-control mb-2 col-sm-10" disabled rows="2">{{token}}</textarea>
                <br>
                <label>Order Id</label>
                <input id="order_id" v-model="order_id" type="text" class="form-control col-sm-10"
                       name="order_id"
                       placeholder="Enter Order Id">
                <label>Product Id</label>
                <input id="product_id" v-model="product_id" type="number" class="form-control col-sm-10"
                       name="product_id"
                       placeholder="Enter Product Id">
                <div class="mt-2 text-warning">Results will appear below:</div>
                <pre class="col-sm-10 mt-3" style="max-height: 300px; overflow-y: scroll">{{post_response}}</pre>
                <button class="btn btn-primary mt-3" type="submit">Send Request</button>
            </form>
        </div>
    </div>
</template>
<script>
    import runPost from '../mixings/Create.js';

    export default {
        mixins: [runPost],
        props: ['token'],
        data: function () {
            return {
                post_response: '',
                order_id: null,
                product_id: null
            }
        },
        methods: {
            createOrder: async function (e) {
                e.preventDefault();
                if (this.order_id == null) {
                    return alert("Please enter Order Id");
                }
                if (this.product_id == null) {
                    return alert("Please enter product Id");
                }

                let orderDetailData =
                    {
                        'order_id': this.order_id,
                        'product_id': this.product_id,
                    };

                // order number present, do api call using axios :-)
                this.post_response = await this.runPost("http://localhost:8000/api/order_details", orderDetailData);
            }
        },
        mounted() {

        }

    }
</script>
