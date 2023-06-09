<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
        <section>
            <div class="">
                <h1>{{ title }}</h1>
            </div>
            <div class="">
                <ul class="">
                    <li v-for="element in todos" :key="element" class="">
                        {{ element.text }}
                    </li>
                </ul>
            </div>
            <div>
                <input @keyup.enter="addTask" type="text" name="todo" placeholder="New task" v-model="newTodo">
            </div>
        </section>
    </div>
    <script src="./app.js"></script>
</body>
</html>