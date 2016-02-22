<?php

namespace src\SON\form;

use InterfaceInput;

class InputNumber implements InterfaceInput {

	public $campo;

	function __construct($campo){

		$this->campo = $campo.": <input type='number'name=".$campo." min='0' max='100' >";
	}
	function Input(){

		return $this->campo;
		
	}
}

?>