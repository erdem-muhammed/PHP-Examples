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
        body form
        {
            width: 150px;
        }
        body form input
        {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            border-radius: 2px;
            border: none;
            border-bottom: 1px solid black;
        }
        body form input[type=submit]
        {
            cursor: pointer;
            background-color: white;
            border: 1px solid #111;
            font-weight: bold;
            transition: all ease 0.4s;
        }
        body form input[type=submit]:hover
        {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form method="post" action="http://localhost/Login-Php/login.php">
          <input type="text" placeholder="Username" name="username" required>
          <input type="password" placeholder="Password" name="pass" required>
          <input type="submit" value="Login">
    </form>
</body>
</html>