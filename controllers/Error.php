<?php 
	
	class Error extends Controller
	{
		//_____________________________________________________
		function __construct(){
			parent::__construct();
			$this->view->render('error/index');
		}
		//_____________________________________________________
		public function index(){}
		//_____________________________________________________
	}
	//helloWORLD00fssm fst marakech
?>
