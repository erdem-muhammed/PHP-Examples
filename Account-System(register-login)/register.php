

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