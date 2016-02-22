<?php

namespace src\SON\form;

use InterfaceInput;

class Submit implements InterfaceInput {

	public $campo;

	function __construct($campo){


		$this->campo = "<input type='submit' value=".$campo.">";
	}
	function Input(){

		return $this->campo;
		
	}
}

?>