<?php 

$list = [
    [
    'todo' => 'HTML',
    ],
    [
    'todo' => 'CSS',
    ],
    'todo' => 'Responsive Design',
    [
    'todo' => 'Javascript',
    ],
    [
    'todo' => 'PHP',
    ],
    [
    'todo' => 'Laravel',
    ],
];

header('Content-Type: application/json');

echo json_encode($list);

?>