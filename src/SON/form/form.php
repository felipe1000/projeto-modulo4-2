<?php

namespace src\SON\form;

use InterfaceInput;
use src\SON\Validator;

class Form{

	public $colecaoInputs;
	public $cont = 0 ;
	
	public function __construct(Validator $validator){

		$this->validator = $validator;
	}
	public function add(InterfaceInput $campo){

		$this->campo = $campo;
		$this->validator->validatorCheck();
		
		$this->colecaoInputs[$this->cont++] = $this->campo->Input();

	}
	public function colecaoInputs(){

		return $this->colecaoInputs;
	}
}
?>