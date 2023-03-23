const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Todo list',
            todos: [],
            newTodo: '',
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
        addTask() {
            console.log('add task', this.newTodo)

            if (!this.newTodo.trim()) {
                return
            }

            let data = {
                todo: this.newTodo
            }

            axios.post("./server.php", data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            }).then(res => {
                const { data } = res
                this.todos = data
            })
        },
    },
    mounted() {
        this.fetchTodoList()
    },
}).mount('#app')