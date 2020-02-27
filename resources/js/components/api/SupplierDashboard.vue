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
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="supplier in suppliers">
                <th scope="row">
                    {{supplier.id}}
                </th>
                <th scope="row">
                    {{supplier.name}}
                </th>
                <td>{{supplier.created_at}}</td>
                <td>{{supplier.updated_at}}</td>
                <td>{{supplier.deleted_at}}</td>
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
                suppliers: []
            }
        },
        mounted() {
            axios.get(
                'http://localhost:8000/api/suppliers',
                {
                    headers: {
                        "Accept": "application/json",
                        "Authorization": `Bearer ` + this.token
                    }
                }
            ).then(response => {
                this.suppliers = response.data;
            }).catch(err => {
                console.log(err);
            });
        }
    }
</script>
