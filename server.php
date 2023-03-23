<?php 

// Con lettura da file Json
// Leggiamo il file Json ed lo trsformiamo in stringa
$todo_string = file_get_contents('./todolist.json');

// Leggiamo la stringa preso dal file Json
$todo_list = json_decode($todo_string, true);

$todo_text = isset($_POST["todo"]) ? $_POST["todo"] : null;

if ($todo_text){
    $todo = [
        'text' => $todo_text,
        'done' => false,
    ];

    $todo_list[]=$todo;

    file_put_contents('./todolist.json', json_encode($todo_list));
}


Header('Content-Type: application/json');

echo json_encode($todo_list);
//var_dump($todo_list);

//****/
// Con array presente in php
// $list = [
//     [
//     'todo' => 'HTML',
//     ],
//     [
//     'todo' => 'CSS',
//     ],
//     'todo' => 'Responsive Design',
//     [
//     'todo' => 'Javascript',
//     ],
//     [
//     'todo' => 'PHP',
//     ],
//     [
//     'todo' => 'Laravel',
//     ],
// ];

//echo json_encode($list);
//****/
?>