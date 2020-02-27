<?php
function get_tasks_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM todoitems
              WHERE todoitems.categoryID = :category_id
              ORDER BY itemNum';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $todoitems = $statement->fetchAll();
    $statement->closeCursor();
    return $todoitems;
}

function get_task($task_id) {
    global $db;
    $query = 'SELECT * FROM todoitems
              WHERE itemNum = :task_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":itemNum", task_id);
    $statement->execute();
    $todoitems = $statement->fetch();
    $statement->closeCursor();
    return $todoitems;
}

function delete_task($task_id) {
    global $db;
    $query = 'DELETE FROM todoitems
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":itemNum", task_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_task($category_id, $itemNum, $name, $description) {
    global $db;
    $query = 'INSERT INTO todoitems
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryid', $category_id);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':itemNum', $itemNum);
    $statement->execute();
    $statement->closeCursor();

}

function delete_category($task_id) {
    global $db;
    $query = 'DELETE FROM todoitems
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":itemNum", task_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_category($category_id, $name) {
    global $db;
    $query = 'INSERT INTO categories
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryid', $category_id);
    $statement->bindValue(':categoryName', $name);
    $statement->execute();
    $statement->closeCursor();

}

?>