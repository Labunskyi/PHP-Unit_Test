<?php
class Calculator 
{
    private $valOne; 
	private $valTwo;
	private $valMemory;
		
	public function setValOne($valOne) {
		if (is_int($valOne)) {
			$this->valOne = $valOne;
		} else {
			return "Not an integer";
		}
	}
	
	public function getValOne() {
		return $this->valOne;
	}
	
	public function setValTwo($valTwo) {
		if (is_int($valTwo)) {
			$this->valTwo = $valTwo;
		} elseif ($valTwo == 0) {
			return"Not an integer";
		}
		else {
			return "Not an integer";			
		}
	}
	
	public function getValTwo() {
		return $this->valTwo;
	}
	
	public function setValMemory($valMemory) {
		if (is_int($valMemory)) {
			$this->vemory = $valMemory;
		} else {
			return "Not an integer";
		}
	}
	
	public function getValMemory() {
		return $this->valMemory;
	}
    public function add(){
        return $this->getValOne() + $this->getValTwo();
    }
    public function subtract(){
        return $this->getValOne() - $this->getValTwo();
    }
    public function multiply(){
        return $this->getValOne() * $this->getValTwo();
    }
    public function divide() {
		if ($this->getValTwo() != 0) {
			return $this->getValOne() / $this->getValTwo();
		} else {
			return "Can not divide on 0";
		}
    }
	
	public function divideNumOneOnValOne() {
		if ($this->getValOne() != 0) {
			return 1 / $this->getValOne();
		} else {
			return "Can not divide on 0";
		}
    }
	
	public function valOneOnPrecent() {
        return $this->getValOne() * 0.01;
    }
	
	public function root(){
        return sqrt($this->getValOne());
    }
}
?>