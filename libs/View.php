<?php
	/**
	* 
	*/
	class View 
	{
		//_____________________________________________________
		function __construct(){}
		//_____________________________________________________
		public function render($name, $noInclude = false ){

			if($noInclude == true){
				require 'views/' .$name. '.php';
			}else{
			require 'views/header.php';
			require 'views/' .$name. '.php';
			require 'views/footer.php';}
		}
		//_____________________________________________________
	}
?>