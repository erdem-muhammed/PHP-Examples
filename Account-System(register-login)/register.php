

<?php

if(empty($_POST["name"]) || empty($_POST["surname"]) ||
empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["pass2"]))
{
    //there can be a problem with register!!
    return;
}
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];


    if(file_exists("User/" . $email . ".txt"))
    {
        //user already exists 
        echo("User already exists!");
    }
    
    $data = fopen("User/" . $email . ".txt", "w");
    fwrite($data, "Name:" . $name . ";Surname:" . $surname . ";E-Mail:" . $email . ";Password:" . $pass);
    fclose($data);
    

     //data adding to local server(mysql)
    /*
    $server = "localhost";
    $databankNAme = "dk_teamprojekt";
    $databankUser = "root";
    $databankPass = "";

    $connection = new mysqli($server, $databankUser, $databankPass, $databankName);
    $request = "INSERT INTO user (name, surname, email, password)  VALUES ('" . $name . "', '" . $surname . "', '" . $email . "', '" . $pass . "');

    if($connection->query($request) === true)
    {
        echo("You have successfully registered!");
    }
    else
    {
        echo("There is a problem here!!");
    }
    $connection->close(); */
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

    You have successfully registered!!

</body>
</html>