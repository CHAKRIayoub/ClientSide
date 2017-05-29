<?php

	/**
	 * 
	 */
	 class dashboard extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct()
	 	{
	 		parent::__construct();
	 		Session::init();
	 		$logged = Session::get('loggedIn');
	 		if($logged == false){
	 			Session::destroy();
	 			header('location: login');//'.URL.'
	 			exit;
	 		}
	 		$this->view->js = array('dashboard/js/default.js');
	 	}
	 	//_____________________________________________________
		public function index(){
            $this->view->locationsList = $this->model->getLocationsList(Session::get('id'));
			$this->view->render('dashboard/index');
		}
		//_____________________________________________________
		public function logout(){
			Session::destroy();
	 		header('location: ../login');//'.URL.'
	 		exit;
		}
		//_____________________________________________________
	

	 } 

?>