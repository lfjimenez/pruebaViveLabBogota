<?php
	class operacionesModelo{

		private $numerosEnIngles = array();

		public function __construct(){

			//array for testing
			$this->numerosEnIngles = array('one' => 1,
									'two' => 2, 
									'tree' => 3, 
									'four' => 4, 
									'five' => 5, 
									'six' => 6, 
									'seven' => 7, 
									'eight' => 8, 
									'nine' => 9,
									'ten' => 10,
									'eleven' => 11,
									'twelve' => 12,
									'thirteen' => 13,
									'fourteen' => 14,
									'fifteen' => 15,
									'sixteen' => 16,
									'seventeen' => 18,
									'eighteen' => 18,
									'nineteen' => 19,
									'twenty' => 20
									);
	    }

	    //return addition for a couple numbers
	    public function sumarNumeros($num1String, $num2String){
	    	$num1Int = $this->getValor($num1String);
	    	$num2Int = $this->getValor($num2String);

	    	return $num1Int + $num2Int;

	    }

	    //return int value from index 
	    public function getValor($numeroString){
	    	return (int)$this->numerosEnIngles[$numeroString];
	    }

	    //return the index for a value
	    public function getIndex($value){
	    	return array_search($value, $this->numerosEnIngles);
	    }

	    
	}