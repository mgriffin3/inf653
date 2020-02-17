<?php
require_once('database.php');

// Get info about tasks
$queryTasks = 'SELECT * FROM ToDoList
                  ORDER BY ItemNum';
$statement1 = $db->prepare($queryTasks);
$statement1->execute();
$tasks = $statement1->fetchAll();
$statement1->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>To Do List</h1></header>
<main>
    <section>
        <!-- display a table of tasks -->
        <h2>Tasks</h2>
        <table>
            <?php if (count($tasks) == 0 )
                echo 'No to do list items exist yet.';
             
                else echo '<tr>
                    <th>Task #</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>&nbsp;</th>
                    </tr>'
            ?>

            <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?php echo $task['ItemNum']; ?></td>
                <td><?php echo $task['Title']; ?></td>
                <td><?php echo $task['Description']; ?></td>
                <td><form action="delete_task.php" method="post">
                    <input type="hidden" name="item_num"
                           value="<?php echo $task['ItemNum']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
            
        </table>
        <p><a href="add_task_form.php">Add Task</a></p>
    </section>
</main>
<footer>
</footer>
</body>
</html>