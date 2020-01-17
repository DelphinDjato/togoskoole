import { url } from '../base_url.js'

let instance = axios.create({
    baseURL: url
});

let Enseignants = {
    template: "#enseignants",
    data() {
        return {
            // Create

            newTeacher: {
                nom: '',
                prenoms: '',
                sexe: '',
                date_naissance: '',
                lieu_naissance: '',
                nationalite: '',
                adresse: '',
                email: '',
                telephone: '',
                diplome: '',

            },
            newUser: {
                role_id: '1',
                name: ' ',
                email: '',
                password: 'password',

            },
        }
    },

    methods: {
        initView() {},

        loadDatas() {

        },

        addTeacher() {
            instance.post('add_teacher', this.newTeacher, this.newUser).then(res => {
                console.log(res.data);
            }).catch(err => {
                console.log(err.response.data)
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
        Enseignants
    }
})