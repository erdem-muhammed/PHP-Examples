<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            height: 100vh;
            background-color: #f7f6f2;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <form method="post" action="http://localhost/Login-Php/login.php">
          <input type="text" placeholder="Username" name="username" required>
          <input type="password" placeholder="Password" name="pass" required>
          <input type="submit" value="login">
    </form>
</body>
</html>