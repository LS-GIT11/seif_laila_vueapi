const app = Vue.createApp({
    data() {
        return {
            cakesData: [],
            error: null,
            selectedCake: null,
            loadingCakes: true,
            loadingCake: false
        };
    },

    created() {
        this.getCakes();
    },

    methods: {
        getCakes() {
            fetch("http://127.0.0.1:8000/api/cakes")
                .then(res => {
                    if (!res.ok) {
                        throw new Error("Failed to fetch cakes");
                    }
                    return res.json();
                })
                .then(cakes => {
                    this.cakesData = cakes;
                })
                .catch(err => {
                    this.error = err.message;
                })
                .finally(() => {
                    this.loadingCakes = false;
                });
        },

        
    }
});

app.mount("#app");