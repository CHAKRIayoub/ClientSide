<?php

	/**
	 * 
	 */
	 class chercher extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct()
	 	{
	 		parent::__construct();
	 		Session::init();
	 	}
	 	//_____________________________________________________
		public function index(){
			$this->view->render('chercher/index');
		}
		//_____________________________________________________
		//_____________________________________________________

		function xhrGetlist(){
			$this->model->xhrGetlist();
		}


	 } 

?>