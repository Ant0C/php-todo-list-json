<?php 

// Con lettura da file Json
// Leggiamo il file Json ed lo trsformiamo in stringa
$todo_string = file_get_contents('./todolist.json');

// Leggiamo la stringa preso dal file Json
//$todo_list = json_decode($todo_string, true);

Header('Content-Type: application/json');

echo $todo_string;
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