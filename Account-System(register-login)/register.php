

<?php

if(empty($_POST["name"]) || empty($_POST["surname"]) ||
empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["pass2"]))
{
    //there can be a problem with register!!
    return;



    if(file_exists("User/" . $email . ".txt"))
    {
        //user already exists 
        echo("User already exists! ")  
    }

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

    You have successfully registered!!

</body>
</html>