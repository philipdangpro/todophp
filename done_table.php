<?php
$todos = getTodoByStatus(['done']);
?>

<table>
    <thead>
    <tr>
        <th colspan="4">todoelt au statut DONE</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($todos as $k => $todo) { ?>
        <tr>
            <td colspan="1"></td>
            <td colspan="2"><?= $todo['name']; ?></td>
            <td colspan="1"></td>
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Clear all</th>
        </tr>
    </tfoot>
</table>