<?php
class Calculator {
    // get data: first number, operator type, second number

    public $operator;
    public float $operand1;
    public float $operand2;

    public function __construct(string $operator, float $operand1, float $operand2) {

        $this->operator = $operator;
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }

    public function calculate(){

        switch ($this->operator){
            case 'add';
                $result = $this->operand1 + $this->operand2;
                return $result;
                break;

            case 'subtract';
                $result = $this->operand1 - $this->operand2;
                return $result;
                break;

            case 'multiply';
                $result = $this->operand1 * $this->operand2;
                return $result;
                break;

            case 'divide';
                $result = $this->operand1 / $this->operand2;
                return $result;
                break;

            default:
                echo "Error!";
                break;
        }
    }
}