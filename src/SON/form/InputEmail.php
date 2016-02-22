<?php

namespace src\SON\form;

use InterfaceInput;

class InputEmail implements InterfaceInput {

	public $campo;

	function __construct($campo){

		$this->campo = $campo.": <input type='email' name=".$campo.">";
	}
	function Input(){

		return $this->campo;
		
	}
}

?>