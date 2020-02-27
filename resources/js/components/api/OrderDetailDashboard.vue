<template>
    <div class="container">
        <h4 class="mb-4">
            <span class="text-info">Endpoint:</span>
            <p class="small text-warning"><span class="badge-pill bg-dark">get</span>/order_details</p>
        </h4>
        <table class="table table-responsive col-md-12">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Order Id</th>
                <th scope="col">Product Id</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Deleted At</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="order_detail in order_details">
                <th scope="row">
                    {{order_detail.id}}
                </th>
                <th scope="row">
                    {{order_detail.order_id}}
                </th>
                <th scope="row">
                    {{order_detail.product_id}}
                </th>
                <td>{{order_detail.created_at}}</td>
                <td>{{order_detail.updated_at}}</td>
                <td>{{order_detail.deleted_at}}</td>
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
                order_details: []
            }
        },
        mounted() {
            axios.get(
                'http://localhost:8000/api/order_details',
                '',
                config
            ).then(response => {
                this.order_details = response.data;
            }).catch(err => {
                console.log(err);
            });
        }
    }
</script>
