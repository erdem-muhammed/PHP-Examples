<?php

$showForm = true;


if(!empty($_POST["title"]) || !empty($_POST["features"]) || 
!empty($_POST["price"]) || !empty($_POST["stock"]))
{
    $showForm = false;
    //enter the info that comes to database:
    /**
     * 1. Connection
     * 2. Send Query
     * 3. Close the connection
     */
    $server = "localhost";
    $user = "root";
    $pass = "";
    $sql_name = "online-shop";

    // 1.Connection
    $connection = new mysqli($server, $user, $pass, $sql_name);

    // 2.Send Query
    $query = "INSERT INTO products (name, features, price, stock) VALUES ('" . $_POST["title"] . "', '" . $_POST["features"]
    . "', '" . $_POST["price"] . "', '" . $_POST["stock"] . "');";
    $sending = $connection->query($query);

    if($sending !== true)
    {
        
    }

    // 3.Close the connection
    $connection->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form
    {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
    }
    form input, form textarea
    {
        margin-bottom: 8px;
        border-radius: 8px;
        padding: 10px;
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <?php if($showForm) { ?>
    <form action="" method="POST">
        <input type="text" placeholder="Title" name="title">
        <textarea placeholder="Features" name="features"></textarea>
        <input type="text" placeholder="Price" name="price">
        <input type="text" placeholder="Stock" name="stock">
        <input type="submit" value="ADD" style="cursor: pointer">
    </form>
    }
</body>
</html>