import getHeaders from "./Headers";

export default {
    mixins: [getHeaders],
    methods: {
        runAPI: function (endpoint) {
            return axios.get(
                endpoint,
                this.getHeaders()
            );
        }
    }
}
