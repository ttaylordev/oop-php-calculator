<?php
declare(strict_types=1);
include 'includes/class_autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Calculator</title>
    </head>
    <body>
        
        <form action="./includes/calculate.php" method="post">
            <span>Calculator app</span>
            <input type="number" step="0.1" name="operand1">

            <select name="operation" id="">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>

            <input type="number" step="0.1" name="operand2">
            <button type="submit" name="submit">Go</button>
        </form>
        
    </body>
</html>