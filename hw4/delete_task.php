<?php
require_once('database.php');

// Get IDs
$task_id = filter_input(INPUT_POST, 'item_num', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($task_id != false) {
    $query = 'DELETE FROM ToDoList
              WHERE ItemNum = :task_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':task_id', $task_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');