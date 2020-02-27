<?php
require('database.php');
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>To Do List</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Task Manager</h1></header>

    <main>
        <h1>Add Task</h1>
        <form action="add_task.php" method="post"
              id="add_task_form">

            <label>Title:</label>
            <input type="text" name="Title"><br>

            <label>Description:</label>
            <input type="text" name="Description"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
    </footer>
</body>
</html>