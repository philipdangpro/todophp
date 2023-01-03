<?php
$todos = getTodoByStatus(['todo']);
?>
<table>
    <thead>
    <tr>
        <th colspan="1">Select</th>
        <th colspan="2">Todoelt au statut TODO</th>
        <th colspan="2">Done</th>
        <th colspan="1">Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($todos as $k => $todo) { ?>
        <tr>
            <td colspan="1"></td>
            <td colspan="2"><?= $todo['name']; ?></td>
            <td colspan="2">Done button</td>
            <td colspan="1">Supprimer button</td>
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="3">Done all</th>
        <th colspan="3">Delete all</th>
    </tr>
    </tfoot>
</table>