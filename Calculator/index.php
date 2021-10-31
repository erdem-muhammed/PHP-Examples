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
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form input
        {
            width: 200px;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .box
        {
            margin-top: 10px;
        }
        .box input
        {
            cursor: pointer;
            padding: 10px 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h4>BASIC CALCULATOR WITH PHP</h4>
    <form action="" method="post" id="calculator">
        <input type="number" name="first_number" placeholder="Please enter first number"> <br>
        <input type="number" name="second_number" placeholder="Please enter second number"> <br>
        <input type="readonly" name="result" placeholder="Result">
    </form>

    <div class="box">
        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Substract">
        <input type="submit" name="operator" value="Multiply">
        <input type="submit" name="operator" value="Divide">
    </div>
</body>
</html>