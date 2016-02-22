<?php

namespace src\SON\form;

use InterfaceInput;

class InputPassword implements InterfaceInput {

	public $campo;

	function __construct($campo){

		$this->campo = $campo.": <input type='password'name=".$campo.">";
	}
	function Input(){

		return $this->campo;
		
	}
}

?>