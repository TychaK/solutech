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
    let token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYmU3YTNiOTJlNmJiYmFkYTE0ZTRhODg4ZTlkODI5ZDk0YTMzNWIxNTJiNGQyYjE4N2M5YjE0YWIxNTI2MzM5N2EwMzc0NjNiYTFlZmE3MmMiLCJpYXQiOjE1ODI3NTU0MjMsIm5iZiI6MTU4Mjc1NTQyMywiZXhwIjoxNjE0Mzc3ODIzLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.r9DGqIezh4kcdQvPDt2NApki45MkpZRZiYZQ02OcWXel2iaPgDPmaPhi3EEon4zzXzRUwa9xVla2pIjVLSNVQY1Z0BwbGP-ZC-XsNcte_SjfUnIbFCacEiCTPW7tkq9lvDAG6s_QS-G4DJV5GZe2erx1J63Uiq0BRs5SCQi205yYI2rVUyZ5xvGud2C0CLgXfYbsEzDnhyoYKZlU6muSfIwHSebCAwK8N8zfmXDF_8ktVSnP4nK4YfApmVlvYbiv_VhXHlT6UtW2jyPU-PjVqCx2et4AgkVFTpQwmhzGWOzbbAC8YsHVKqc77_0HNg6ZotjpjNChtpre0ZuGf4pA2Nc3N4sThA_kDojkxtaMJbSO3ZgHPerSFYCp-vBv6nu812I19z7o1PkxmEpCj2CqP9oQRIa2v-P3B0QYFwjaCIoSvpVsRid3SImglQREAnye2J_2LyzYrI9rauvLwVgvNeHHAo19T2YUWvYokNK3d9k0G1q4tIwIDDu3WqFE2fwVELM2_6uUjza0Ms6baNEvx2cX9CXM-lbRrcGpR1vGXp4YNAM05jsRHvN8eicEW_-LCy-X0PDgYhJPOxIZo6lvdWbrqDx7KYUp9LssJKMA0PBbfkWE1vc69nITkyvw2VUzurasHC-LcpoxsMPmQtxbTQFC-_dQXZNIVvxF6ml0DNw';
    const config = {
        headers: {
            'Content-Type': 'application/json',
            "Accept": "application/json",
            "Authorization": `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYmU3YTNiOTJlNmJiYmFkYTE0ZTRhODg4ZTlkODI5ZDk0YTMzNWIxNTJiNGQyYjE4N2M5YjE0YWIxNTI2MzM5N2EwMzc0NjNiYTFlZmE3MmMiLCJpYXQiOjE1ODI3NTU0MjMsIm5iZiI6MTU4Mjc1NTQyMywiZXhwIjoxNjE0Mzc3ODIzLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.r9DGqIezh4kcdQvPDt2NApki45MkpZRZiYZQ02OcWXel2iaPgDPmaPhi3EEon4zzXzRUwa9xVla2pIjVLSNVQY1Z0BwbGP-ZC-XsNcte_SjfUnIbFCacEiCTPW7tkq9lvDAG6s_QS-G4DJV5GZe2erx1J63Uiq0BRs5SCQi205yYI2rVUyZ5xvGud2C0CLgXfYbsEzDnhyoYKZlU6muSfIwHSebCAwK8N8zfmXDF_8ktVSnP4nK4YfApmVlvYbiv_VhXHlT6UtW2jyPU-PjVqCx2et4AgkVFTpQwmhzGWOzbbAC8YsHVKqc77_0HNg6ZotjpjNChtpre0ZuGf4pA2Nc3N4sThA_kDojkxtaMJbSO3ZgHPerSFYCp-vBv6nu812I19z7o1PkxmEpCj2CqP9oQRIa2v-P3B0QYFwjaCIoSvpVsRid3SImglQREAnye2J_2LyzYrI9rauvLwVgvNeHHAo19T2YUWvYokNK3d9k0G1q4tIwIDDu3WqFE2fwVELM2_6uUjza0Ms6baNEvx2cX9CXM-lbRrcGpR1vGXp4YNAM05jsRHvN8eicEW_-LCy-X0PDgYhJPOxIZo6lvdWbrqDx7KYUp9LssJKMA0PBbfkWE1vc69nITkyvw2VUzurasHC-LcpoxsMPmQtxbTQFC-_dQXZNIVvxF6ml0DNw`
        }
    };

    export default {
        data: function () {
            return {
                supplier_products: []
            }
        },
        mounted() {
            axios.get(
                'http://localhost:8000/api/supplier_products',
                '',
                config
            ).then(response => {
                this.supplier_products = response.data;
            }).catch(err => {
                console.log(err);
            });
        }
    }
</script>
