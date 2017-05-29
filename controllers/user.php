<?php

	 class user extends Controller
	 {
	 	//_____________________________________________________


	 	function __construct()
	 	{


	 		parent::__construct();
	 		Session::init();
	 		$logged = Session::get('loggedIn');
	 		$role = Session::get('role');


	 		if($role != 'admin'){
	 			header('location: dashboard');//'.URL.'
	 			exit;
	 		}


	 		if($logged == false){
	 			Session::destroy();
	 			header('location: login');//'.URL.'
	 			exit;
	 		}


	 		$this->view->js = array('user/js/default.js');
	 	}


	 	//_____________________________________________________


		public function index(){


			$this->view->userList = $this->model->Getlist();
			$this->view->render('user/index');


		}


		//_____________________________________________________
		public function logout(){


			Session::destroy();
	 		header('location: ../login');//'.URL.'
	 		exit;


		}
		//_____________________________________________________
		function add(){
			$data = array();
			$data['login'] = $_POST['login'];
			$data['password'] = md5($_POST['password']);
			$data['role'] = $_POST['role'];
            $data['nom'] = $_POST['nom'];
            
            
            
			$this->model->add($data);
            $this->view->resultat = "l' utilisateur ". $_POST['nom'] ." est ajouter avec succeés ";
			header('location: ../user?result=utilisateur '. $_POST['nom'] .' est ajouter avec succeés');
		}

		function del($id){
			$this->model->del($id);
			header('location: ../../user?result=utilisateur '. $_POST['nom'] .' est bien supprimer');
		}
		function edit($id){
			$this->view->user = $this->model->Getuser($id);
			$this->view->render('user/edit');
		}
		function edit_save($id){
			$data = array();
			$data['login'] = $_POST['login'];
			$data['password'] = md5($_POST['password']);
			$data['role'] = $_POST['role'];
            $data['nom'] = $_POST['nom'];
			$this->model->edit($data,$id);

			header('location: '.URL.'user?result=utilisateur '. $_POST['nom'] .' est modifier avec succeés');

		}

	 } 

?>