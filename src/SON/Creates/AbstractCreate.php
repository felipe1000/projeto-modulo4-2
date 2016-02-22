<?php

namespace src\SON\Creates;

abstract class AbstractCreate implements CreateInterface{

	function setDi($di){

		$this->di = $di;
	}
}
?>