export default {
    methods: {
        runAPI: function (endpoint) {
            return axios.get(
                endpoint,
                {
                    headers: {
                        "Accept": "application/json",
                        "Authorization": `Bearer ` + this.token
                    }
                }
            );
        }
    }
}
