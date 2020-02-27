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
    export default {
        props: ['token'],
        data: function () {
            return {
                post_response: '',
                order_id: null,
                product_id: null
            }
        },
        methods: {
            createOrder: function (e) {
                e.preventDefault();
                if (this.order_id == null) {
                    return alert("Please enter Order Id");
                }
                if (this.product_id == null) {
                    return alert("Please enter product Id");
                }

                // order number present, do api call using axios :-)
                axios.post(
                    "http://localhost:8000/api/order_details",
                    {
                        'order_id': this.order_id,
                        'product_id': this.product_id,
                    },
                    {
                        headers: {
                            "Accept": "application/json",
                            "Authorization": `Bearer ` + this.token
                        }
                    }
                )
                    .then(response => {
                        this.post_response = JSON.stringify(response, null, 2);
                    })
                    .catch(err => {
                        alert("Something is wrong. Please check the response below");
                        this.post_response = JSON.stringify(response, null, 2);
                    });
            }
        },
        mounted() {
        }

    }
</script>
