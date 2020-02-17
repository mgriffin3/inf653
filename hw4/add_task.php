<?php
// Get the product data
    $title = filter_input(INPUT_POST, 'Title');
    $description = filter_input(INPUT_POST, 'Description');

    echo "Adding ". $title;

    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO ToDoList
                 (Title, Description)
              VALUES
                 (:Title, :Description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':Title', $title);
    $statement->bindValue(':Description', $description);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
?>