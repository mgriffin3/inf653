<?php
    // get the data from the form
    $firstname = $_GET['first_name'];
    $lastname = $_GET['last_name'];
    $age = $_GET['age'];
    
    //set message
    $message = 'Hello, my name is ' . $firstname . ' ' . $lastname . '. I am ' . $age . ' years old and I am ';
    if ($age < 18){
        $message .= 'not ';
    }
    $message .= 'old enough to vote in the United States.';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>     
        <span><?php echo $message; ?></span><br>

    </main>
</body>
</html>