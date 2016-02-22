<?php

namespace src\SON;

use src\SON\Request;

class Validator{

	public $request;
	
	public function __construct(Request $request){

		$this->request = $request;
		if( $this->request->getRequest() <= 0){

			echo "Não existe Requerimento do Usuário para este Formulário";

			exit;
		}

	}
	public function validatorCheck(){

		 if ($this->request->getRequest() == 0 ) {

		 	echo "Não existe mais Requerimento do Usuário para este Formulário";

		 	exit;

		 }else{

		 	$utilizado = $this->request->getRequest();
		 	$utilizado--;
		 	$this->request->setRequest($utilizado);
		 }
	}
}
?>