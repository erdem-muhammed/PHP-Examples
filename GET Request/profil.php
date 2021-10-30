<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>You can see all profiles which you want to see here!!</h3>

<span class="name">
    <?php
    if(isset($_GET["id"]))
    {
        if($_GET["id"] == 12)
        echo("ERDEM");
        else if($_GET["id"] == 18)
        echo("Schmidt");
        else if($_GET["id"] == 22)
        echo("Müller");
        else
        echo("unknown");
    }
    else
    {
        echo("please enter your profile id to the browser");
    }
     
    ?>



</span>


</body>
</html>