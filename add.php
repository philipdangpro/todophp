<?php
session_start();
require "utils.php";

dump($_REQUEST);

$request = [
    'name' => $_REQUEST['todoelt'],
    'status' => 'todo',
    'hidden' => 0
];

addTodo($request);

header("Location: index.php");


