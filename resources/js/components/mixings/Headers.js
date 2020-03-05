export default {
    methods: {
        getHeaders: function () {
            return {
                headers: {
                    "Accept": "application/json",
                    "Authorization": `Bearer ` + this.token
                }
            }
        }
    }
}
