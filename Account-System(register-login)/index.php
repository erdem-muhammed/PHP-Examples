<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create an Account</h1>
    <form method="POST" action="register.php">
      <input type="text" placeholder="Name" name="name" required>
      <input type="text" placeholder="Surname" name="surname" required>
      <input type="email" placeholder="Email Address" name="email" required>
      <input type="text" placeholder="Birthday" name="birthday" required>
      <input type="password" placeholder="Password" name="pass" required>
      <input type="password" placeholder="Please enter your password again!" name="pass2" required>
      <input type="submit" value="Create an account">
    </form>
</body>
</html>