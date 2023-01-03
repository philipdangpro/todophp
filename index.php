<?php
    session_start();
    require "utils.php";
?>

<h1>My todo list php raw</h1>

<form method="post" action="add.php">
    <label for="todoelt">Nouvelle action à faire</label>
    <input id="todoelt" type="text" name="todoelt" placeholder="Saisissez une action à faire">
    <input type="submit" value="Ajouter">
</form>

<hr>
<?php include('todo_table.php'); ?>
<hr>
<?php include('done_table.php'); ?>

<?php
initDBConnection();
?>

<style>
    form, table {
        border : 2px black solid;
        padding: 5px;
    }

    th, td {
        border : 1px grey solid;
    }
    form {
        display: inline-block;
    }
    th {
        color: #12A6FF;
        font-weight: bold;
    }
    * {
        font-family: sans-serif;
    }
</style>
