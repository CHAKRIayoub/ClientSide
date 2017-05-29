<?php

	/**
	 * 
	 */
	 class voitures extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct()
	 	{
	 		parent::__construct();
	 		Session::init();
	 		
	 	}
	 	//_____________________________________________________
		public function index(){
            
            $this->view->voituressList = $this->model->getPostsList();
            //$this->view->topPostsList = $this->model->getTopPostsList();
            //$this->view->randomPostsList = $this->model->getRandomPostsList();
			$logged = Session::get('loggedIn');
            $role = Session::get('role');
	 		if($logged == true && (  $role == 'Manager' )){
	 			
                //editeur
                $this->view->render('voitures/editeur');
                
            }else{
                
                //visiteur
                $this->view->render('voitures/visiteur');
                
            }
            
		}
         public function vl(){
             $this->view->voituressList = $this->model->getVoituresL();
             $this->view->render('voitures/voilou');
         }
         
         public function js(){
            
            $this->view->postsList = $this->model->getPostsJsList();
            $this->view->topPostsList = $this->model->getTopPostsList();
            $this->view->randomPostsList = $this->model->getRandomPostsList();
			$logged = Session::get('loggedIn');
            $role = Session::get('role');
	 		if($logged == true && ( $role == 'admin' || $role == 'editeur' )){
	 			
                //editeur
                $this->view->render('posts/editeur');
                
            }else{
                
                //visiteur
                $this->view->render('posts/visiteur');
                
            }
            
		}
        public function php(){
            
            $this->view->postsList = $this->model->getPostsPhpList();
            $this->view->topPostsList = $this->model->getTopPostsList();
            $this->view->randomPostsList = $this->model->getRandomPostsList();
			$logged = Session::get('loggedIn');
            $role = Session::get('role');
	 		if($logged == true && ( $role == 'admin' || $role == 'editeur' )){
	 			
                //editeur
                $this->view->render('posts/editeur');
                
            }else{
                
                //visiteur
                $this->view->render('posts/visiteur');
                
            }
            
		}
         public function jquery(){
            
            $this->view->postsList = $this->model->getPostsJqueryList();
            $this->view->topPostsList = $this->model->getTopPostsList();
            $this->view->randomPostsList = $this->model->getRandomPostsList();
			$logged = Session::get('loggedIn');
            $role = Session::get('role');
	 		if($logged == true && ( $role == 'admin' || $role == 'editeur' )){
	 			
                //editeur
                $this->view->render('posts/editeur');
                
            }else{
                
                //visiteur
                $this->view->render('posts/visiteur');
                
            }
            
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