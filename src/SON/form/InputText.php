<?php

namespace src\SON\form;

use InterfaceInput;

class InputText implements InterfaceInput {

	public $campo;

	function __construct($campo){

		$this->campo = $campo.": <input type='text' name=".$campo.">";
	}
	function Input(){

		return $this->campo;
		
	}
}

?>