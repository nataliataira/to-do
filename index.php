<?php
/** Iniciado dia 18/10/23 - Por Natália Gomes Taira */

$todos = [];
$fileName = 'todo.json';
if (file_exists($fileName))
{
    $json = file_get_contents($fileName);
    $todos = json_decode($json, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR TO-DO LIST APP :)</title>
</head>
<body>

    <form action="newTodo.php" method="post">
        <input type="text" name="todo_name" placeholder="Please, enter your todo">
        <button>New!</button>
    </form>

    <?php foreach ($todos as $todoName => $todo): ?>
        <div style="margin-top: 20px;">
            <form style="display: inline-block" action="change_status.php" method="post">
                <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : ''?>>
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
            </form>
            <?php echo $todoName ?>
            <form style="display: inline-block" action="delete.php" method="post">
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                <button>Delete</button>
            </form>
        </div>
    <?php endforeach ?>

    <script>
        const checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(ch => {
            ch.onclick = function () {
                this.parentNode.submit();
            };
        })
    </script>
</body>
</html>