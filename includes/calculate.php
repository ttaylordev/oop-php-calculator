<?php
    declare(strict_types=1);
    include './class_autoload.php';

    // $_POST = json_decode(file_get_contents("php://input"), true);
    // echo file_get_contents('php://input');

    // var_dump($_POST);

    $operator = $_POST['operation'];
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];

    $calc = new Calculator($operator, (float)$operand1, (float)$operand2);

    try {
        echo $calc->calculate();
    } catch (TypeError $e){
        echo "There was an error: " . $e->getMessage();
    }