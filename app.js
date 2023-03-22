const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Todo list',
            todos: [],
        }
    },
    methods: {
        fetchTodoList() {
            axios
                .get('./server.php')
                .then((res) => {
                    console.log(res.data)
                    this.todos = res.data
                })
        },
    },
    mounted() {
        this.fetchTodoList()
    },
}).mount('#app')