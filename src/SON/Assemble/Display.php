<?php

namespace src\SON\Assemble;

class Display{

	public $form;
	protected $abrir = false ; 

	 function __construct($colecaoInputs){

	 	$this->colecaoInputs = $colecaoInputs;

	 }
	 function openForm(){

	 	$count = count($this->colecaoInputs);

	 	if ( $count == 1 ){

	 		echo"<form action='form_submit' method='post' accept-charset='utf-8'>";

	 	}
	 }
	 function Field(){

	 	$input = end($this->colecaoInputs); 
		echo "<br>".$input."<br>";

	 }
	 function closeForm(){

	 	echo "</form>";
	 }
	 function Render(){

		echo"<form action='form_submit' method='post' accept-charset='utf-8'>";

		foreach ( $this->colecaoInputs as $input) {
			echo $input."<br>";
		}

		echo "</form>";
	
	}
}
?>