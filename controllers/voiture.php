<?php
	/**
	 * 
	 */
	 class voiture extends Controller
	 {
         
	 	//_____________________________________________________
	 	function __construct()
	 	{
            
	 		parent::__construct();
	 		Session::init();		
	 		
            
	 	}
	 	//_____________________________________________________
		public function index(){
            

            
		}
        public function p($id){
            $this->view->post = $this->model->GetPost($id);
            $this->model->vue($id);
			$this->view->render('post/index');
        }
		//_____________________________________________________
		public function logout(){
			Session::destroy();
	 		header('location: ../login');//'.URL.'
	 		exit;
		}
        
		//_____________________________________________________
         
       function add(){
			//$this->model->xhrInsert();
           
    

               

        
           
           
           
			$data = array();
		    $data['marque'] = $_POST['marque'];
            $data['modele'] = $_POST['modele'];                        
            $data['image'] = $_POST['image'];
            $data['ville'] = $_POST['ville'];
            $data['prix'] = $_POST['prix'];
            $data['carburant'] = $_POST['carburant'];
            $data['desciption'] = $_POST['desciption'];
            $data['matricule'] = $_POST['matricule'];
            $data['passagers'] = $_POST['passagers'];
            $data['options'] = $_POST['options'];
            $data['editeur'] = Session::get('id');
           
           
            
			$this->model->add($data);
           
           

			header('location: ../voitures?result=voiture ajouter avec succée');
		}

		function del($id){
			$this->model->del($id);
			header('location: ../../voitures?result=voiture supprimer avec succée');
		}
		function edit($id){
			$this->view->voiture = $this->model->GetVoiture($id);
			$this->view->render('voiture/edit');
		}
		function edit_save($id){
           $data = array();
		    $data['marque'] = $_POST['marque'];
            $data['modele'] = $_POST['modele'];                        
            $data['image'] = $_POST['image'];
            $data['ville'] = $_POST['ville'];
            $data['prix'] = $_POST['prix'];
            $data['carburant'] = $_POST['carburant'];
            $data['desciption'] = $_POST['desciption'];
            $data['matricule'] = $_POST['matricule'];
            $data['passagers'] = $_POST['passagers'];
            $data['options'] = $_POST['options'];
            $data['editeur'] = Session::get('id');
           
           
           $this->model->edit($data, $id);
            header('location: ../../voitures?result=voiture modifier avec succée');
		}
         
        function history($id){
            $this->view->locationsList = $this->model->history($id);
			$this->view->render('voiture/history');
        }
       

	 } 

?>