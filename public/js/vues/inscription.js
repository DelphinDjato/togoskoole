import { url } from '../base_url.js'

let instance = axios.create({
    baseURL: url
});

let Inscriptions = {
    template: "#inscriptions",
    data() {
        return {
            // Create
            newInscription: {
                name: ''
            },
        }
    },

    methods: {
        initView() {},

        loadDatas() {

        },

        addInscription() {
            instance.post('add_category', this.newCategory).then(res => {
                console.log(res.data);
            }).catch(err => {
                console.log(err.response.data)

                $.gritter.add({
                    title: "Operation echoue",
                    time: 2050,
                    text: "Veuillez remplir le champ s'il vous plait",
                    class_name: "color danger"
                });
            });
        },
    },

    mounted() {
        this.initView()
        this.loadDatas()
    },

    computed: {}
}

new Vue({
    el: "#app",
    data: {},
    methods: {},
    components: {
        Inscriptions
    }
})