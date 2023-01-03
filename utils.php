<?php

function dump($val) {
    echo "<pre>";
    print_var_name($val);
    var_dump($val);
}

function dd($val) {
    dump($val);
    die;
}

function print_var_name($var) {
    foreach($GLOBALS as $var_name => $value) {
        if ($value === $var) {
            return $var_name;
        }
    }

    return false;
}

function session_update() {

}

function initDBConnection()
{
    try {
        //localhost : 192.168.127.143:3306 avec port 3306
        $mysqlClient = new PDO(
            'mysql:host=127.0.0.1:3306;dbname=todophp;charset=utf8',
            'newroot',
            'pdapda'
        );
        return $mysqlClient;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getAllTodo() {
    $mysqlClient = initDBConnection();
    $query = "select * from todo_elt order by id desc";
    $todoStatement = $mysqlClient->prepare($query);
    $todoStatement->execute();
    return $todoStatement->fetchAll();
}

function getTodoByStatus($status = []) {
    $mysqlClient = initDBConnection();

    foreach ($status as $k => $elt) {
        $status[$k] = "'" . $elt . "'";
    }

    if (is_array($status)) {
        $statusesList = implode(",", $status);
    }

    $query = "select * from todo_elt where status in (". $statusesList . ") order by id desc";

    $todoStatement = $mysqlClient->prepare($query);
    $todoStatement->execute();
    return $todoStatement->fetchAll();
}

function deleteTodoById($ids) {
    $mysqlClient = initDBConnection();
    $idsList = implode(",", $ids);
    $query = "delete from todo_elt where id in (". $idsList . ")";
    $todoStatement = $mysqlClient->prepare($query);
    $todoStatement->execute();
}

function addTodo($request) {
    $mysqlClient = initDBConnection();
    $query = 'INSERT INTO todo_elt(name, status, hidden) VALUES (:name, :status, :hidden)';

    $insertRecipe = $mysqlClient->prepare($query);

    $insertRecipe->execute($request);
}

?>

