<?php

namespace src\SON\Assemble;

use src\SON\Creates\AbstractCreate;

class Assemble{

	function __construct($id){

		$this->di=$id;
	}
	function addField(AbstractCreate $create){

		$this->create = $create;
		$this->create->setDi($this->di);
		$this->create->field();

	}
	function display(){

		$this->create->display();
	}
}
?>