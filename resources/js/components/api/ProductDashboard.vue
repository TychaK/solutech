<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">get</span>/products</p>
        </h4>
        <table class="table table-responsive col-md-12">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products">
                <th scope="row">
                    {{product.id}}
                </th>
                <th scope="row">
                    {{product.name}}
                </th>
                <td>{{product.description}}</td>
                <td>{{product.quantity}}</td>
                <td>{{product.created_at}}</td>
                <td>{{product.updated_at}}</td>
                <td>{{product.deleted_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        props: ['token'],
        data: function () {
            return {
                products: []
            }
        },
        mounted() {
            axios.get(
                'http://localhost:8000/api/products',
                {
                    headers: {
                        "Accept": "application/json",
                        "Authorization": `Bearer ` + this.token
                    }
                }
            ).then(response => {
                this.products = response.data;
            }).catch(err => {
                console.log(err);
            });
        }
    }
</script>
