<?php

if(!empty($_POST["title"]) || !empty($_POST["features"]) || 
!empty($_POST["price"]) || !empty($_POST["stock"]))
{
    $server = "localhost";
    $user = "root";
    $pass = "123456";
    $sql_name = "online-shop";
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

    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Title" name="title">
        <textarea placeholder="Features" name="features"></textarea>
        <input type="text" placeholder="Price" name="price">
        <input type="text" placeholder="Stock" name="stock">
        <input type="submit" value="add">
    </form>
</body>
</html>