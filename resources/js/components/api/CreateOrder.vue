<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">POST</span>/api/orders</p>
        </h4>
        <div class="fa-border p-5">
            <form id="create-order-form" @submit="ValidateOrder" method="POST" action="">
                <label>Access Token</label>
                <textarea class="form-control mb-2 col-sm-10" disabled rows="3">{{token}}</textarea>
                <br>
                <label>Order Number</label>
                <input id="order_number" v-model="order_number" type="text" class="form-control col-sm-10"
                       name="order_number"
                       placeholder="Enter Order Number">
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
                order_number: null
            }
        },
        methods: {
            ValidateOrder: async function (e) {
                e.preventDefault();
                if (this.order_number == null) {
                    return alert("Please enter order number");
                }
                let orderData = {
                    'order_number': this.order_number
                };
                const response = await this.runPost("http://localhost:8000/api/orders", orderData);
                this.post_response = response.data;
            },

        },

        mounted() {
        }

    }
</script>
