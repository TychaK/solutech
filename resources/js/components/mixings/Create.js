import getHeaders from "./Headers";

export default {
    mixins: [getHeaders],
    methods: {
        runPost: function (endpoint, data) {
            return axios.post(
                endpoint,
                data,
                this.getHeaders()
            );
        }
    }
}
