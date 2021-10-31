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
            justify-content: flex-start;
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
<?php
$first_num = $_POST['first_number'];
$second_num = $_POST['second_number'];
$operator = $_POST['operator'];
$result = '';

if(is_numeric($first_num) && is_numeric($second_num))
{
    switch ($operator)
    {
        case "Add":
            $result = $first_num + $second_num;
            break;
        case "Substract":
            $result = $first_num - $second_num;
            break;
    }
}
?>
<body>
    <h4>BASIC CALCULATOR WITH PHP</h4>
    <form action="" method="post" id="calculator">
        <input type="number" name="first_number" placeholder="Please enter first number" id="first_number" value="<?php echo $first_num; ?>" required> <br>
        <input type="number" name="second_number" placeholder="Please enter second number" id="second_number" value="<?php echo $second_num; ?>" required> <br>
        <input type="readonly" name="result" placeholder="Result" value="<?php echo $result ?>">

        <div class="box">
        <input type="submit" name="operator" value="Add"> <br>
        <input type="submit" name="operator" value="Substract"> <br>
        <input type="submit" name="operator" value="Multiply"> <br>
        <input type="submit" name="operator" value="Divide">
        </div>
    </form>
</body>
</html>