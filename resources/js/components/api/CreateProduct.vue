<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">POST</span>/api/products</p>
        </h4>
        <div class="fa-border p-5">
            <form id="create-order-form" @submit="createOrder" method="POST" action="">
                <label>Access Token</label>
                <textarea class="form-control mb-2 col-sm-10" disabled rows="2">{{token}}</textarea>
                <br>
                <label>Product Name</label>
                <input id="name" v-model="name" type="text" class="form-control col-sm-10"
                       name="name"
                       placeholder="Enter Product Name">
                <label>Product Description</label>
                <textarea id="description" v-model="description" type="text" class="form-control col-sm-10"
                          name="description"
                          placeholder="Enter Product Description"></textarea>
                <label>Product Quantity</label>
                <input id="quantity" v-model="quantity" type="number" class="form-control col-sm-10"
                       name="name"
                       placeholder="Enter Quantity">
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
                name: null,
                description: null,
                quantity: null
            }
        },
        methods: {
            createOrder: function (e) {
                e.preventDefault();
                if (this.name == null) {
                    return alert("Please enter product name");
                }

                // order number present, do api call using axios :-)
                axios.post(
                    "http://localhost:8000/api/products",
                    {
                        'name': this.name,
                        'description': this.description,
                        'quantity': this.quantity
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
