<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">PUT</span>/suppliers/{id}</p>
        </h4>
        <div class="fa-border p-5">
            <form id="create-order-form" @submit="createOrder" method="POST" action="">
                <label>Access Token</label>
                <textarea class="form-control mb-2 col-sm-10" disabled rows="3">{{token}}</textarea>
                <br>
                <label>Supplier ID</label>
                <input id="id" v-model="id" type="text" class="form-control col-sm-10"
                       name="order_id"
                       placeholder="Supplier ID">
                <br>
                <label>Supplier Name</label>
                <input id="name" v-model="name" type="text"
                       class="form-control col-sm-10 mt-2"
                       name="name"
                       placeholder="Enter the new supplier name">
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
                id: null,
                name: null
            }
        },
        methods: {
            createOrder: function (e) {
                e.preventDefault();
                if (this.id == null) {
                    return alert("Please enter supplier id");
                }
                if (this.name == null) {
                    return alert("Please enter the new supplier name");
                }

                // order number present, do api call using axios :-)
                axios.put(
                    "http://localhost:8000/api/suppliers/" + this.id,
                    {
                        'name': this.name
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
                        this.post_response = JSON.stringify(err, null, 2);
                    });
            }
        },
        mounted() {
        }

    }
</script>
