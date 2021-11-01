

<?php


if(isset($_POST["username"]) && isset($_POST["pass"]))
{
    if($_POST["username"] == "admin" && $_POST["pass"] == "123456")
    {
        echo("You have successfully logged in!!");
    }
}

