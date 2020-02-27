<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">PUT</span>/orders/{order_id}</p>
        </h4>
        <div class="fa-border p-5">
            <form id="create-order-form" @submit="createOrder" method="POST" action="">
                <label>Access Token</label>
                <textarea class="form-control mb-2 col-sm-10" disabled rows="3">{{token}}</textarea>
                <br>
                <label>Order ID</label>
                <input id="order_id" v-model="order_id" type="text" class="form-control col-sm-10"
                       name="order_id"
                       placeholder="Enter Order ID">
                <input id="order_number" v-model="order_number" type="text"
                       class="form-control col-sm-10 mt-2"
                       name="order_number"
                       placeholder="Enter Order Number">
                <div class="mt-2 text-warning">Results will appear below:</div>
                <pre class="col-sm-10 mt-1" style="max-height: 300px; overflow-y: scroll">{{post_response}}</pre>
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
                order_number: null
            }
        },
        methods: {
            createOrder: function (e) {
                e.preventDefault();
                if (this.order_id == null) {
                    return alert("Please enter order id");
                }
                if (this.order_number == null) {
                    return alert("Please enter the new order number");
                }

                // order number present, do api call using axios :-)
                axios.put(
                    "http://localhost:8000/api/orders/" + this.order_id,
                    {
                        'order_number': this.order_number
                    },
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
