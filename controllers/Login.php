<?php

	/**
	 * 
	 */
	 class Login extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct(){
	 		parent::__construct();
            $logged = Session::get('loggedIn');
	 		if($logged == true){
	 			header('location: index');//'.URL.'
	 			exit;
	 		}
	 	}
	 	//_____________________________________________________
		public function index(){
			$this->view->render('login/login');
		}
		//_____________________________________________________
		public function run(){
			$this->model->run();
		}
		//_____________________________________________________
         
         public function inscr(){
             $this->view->render('login/inscr');
         }
         
         public function inscr_save(){
             $data = array();
             $data['cin'] = $_POST['cin'];
             $data['nom'] = $_POST['nom']; 
             $data['pre'] = $_POST['pre'];
             $data['tel'] = $_POST['tel']; 
             $data['adr'] = $_POST['adr'];
             $data['log'] = $_POST['log']; 
             $data['pas'] = $_POST['pas']; 
             $this->model->inscr($data);
         }
	 } 

?>