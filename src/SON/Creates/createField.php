<?php

namespace src\SON\Creates;

use src\SON\Assemble\Display;

class createField extends AbstractCreate{

	public $campo;

	public function __construct($campo){

		$this->campo = $campo;
	}
	public function field(){

		$this->form = $this->di->get('form');
		$this->form->add($this->campo);
	}
	public function display(){

		$display = new display($this->form->colecaoInputs());
		$display->openForm();
		$display->Field();
	}
} 
?>