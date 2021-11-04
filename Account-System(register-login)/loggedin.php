<?php
   
   if(empty($_POST["email"]) || empty($_POST["pass"]))
   {
       return;
   }
   $path = "User/" . $_POST["email"] . ".txt";
   
   $data = fopen($path, "r");

   if($data === false)
   {
       echo("User not found");
       return;
   }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    You have successfully logged in!!
</body>
</html>