<?php
class NumberChecker  {
	public function __construct(private int $number){}
	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isNotEven(): bool {
		return $this->number%2== 1;
	} 
	public function isPositive(): bool {
		return $this->number > 0;
	}
	public function isNumberZero(): bool {
		return $this->number == 0;
	}
}
?>