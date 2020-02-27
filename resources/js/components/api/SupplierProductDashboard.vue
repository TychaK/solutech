<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">get</span>/supplier_products</p>
        </h4>
        <table class="table table-responsive col-md-12">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Supply Id</th>
                <th scope="col">Product Id</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="supplier_product in supplier_products">
                <th scope="row">
                    {{supplier_product.id}}
                </th>
                <th scope="row">
                    {{supplier_product.supply_id}}
                </th>
                <th scope="row">
                    {{supplier_product.product_id}}
                </th>
                <td>{{supplier_product.created_at}}</td>
                <td>{{supplier_product.updated_at}}</td>
                <td>{{supplier_product.deleted_at}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                supplier_products: []
            }
        },
        mounted() {
            axios.get(
                'http://localhost:8000/api/supplier_products',
                {
                    headers: {
                        "Accept": "application/json",
                        "Authorization": `Bearer ` + this.token
                    }
                }
            ).then(response => {
                this.supplier_products = response.data;
            }).catch(err => {
                console.log(err);
            });
        }
    }
</script>
