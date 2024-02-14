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
    public function testIsNotEven(){
        $this->assertTrue($this->number->isNotEven());
    }
    public function testIsPositive(){ 
    $this->assertFalse($this ->number->isPositive());
    }
    public function testIsNumberZero(){ 
        $this->assertTrue($this ->number->isNumberZero());
    }
}
?>