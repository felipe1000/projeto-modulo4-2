<?php

namespace src\SON;

class Request extends AbsRequest{


	public function __construct($request){

		$this->request=$request;
	}

	public function getRequest(){

		return $this->request;
	}
}
?>