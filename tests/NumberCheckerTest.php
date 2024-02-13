<?php 
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{
    private $number;
    public function setUp(): void { 
        $this->number = new NumberChecker(4); 
    }
    public function testIsEven(){
    $this->assertTrue($this->number->isEven());
    }
    public function testIsPositive(){ 
    $this->assertTrue($this ->number->isPositive());
    }
}
?>