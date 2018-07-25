<?php
namespace CalculatorBundle\Entity;

class Calculator
{
    /**
     * @var float
     */
    private $leftOperand;

    /**
     * @var float
     */

    private $rightOperand;

    /**
     * @var string
     */

    private $operator;

    /**
     *Get Left Operand
     *
     * @return float
     */

    public function getLeftOperand(){
        return $this-> leftOperand;
    }

    /**
     * Set left operand
     *
     * @param float $operand
     * @return Calculator
     */

    public function setLeftOperand($operand) {
        $this->leftOperand = $operand;
        return $this;
    }

    /**
     * get right operand
     *
     * @return float
     */

    public function getRightOperand() {
        return $this->rightOperand;
    }

    /**
     * set right operand
     *
     * @param float $operand
     * @return Calculator
     */

    public function setRightOperand($operand){
        $this->rightOperand = $operand;
        return $this;

    }

    /**
     * @return string
     */
    public function getOperator(){
        return $this->operator;
    }

    /**
     * @param string $operand
     * @return Calculator
     */
    public function setOperator($operand) {
        $this->operator = $operand;
            return $this;
    }
}