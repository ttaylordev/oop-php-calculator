<?php
declare(strict_types=1);
include 'include/class_autoload.php';
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
        
        <form action="includes/calc.php">
            <span>Calculator app</span>
            <input type="number" name="num1">

            <select name="open" id="">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>

            <input type="number" name="num2">
            <button type="submit" name="submit">=</button>
        </form>
        
    </body>
</html>