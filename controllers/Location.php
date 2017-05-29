<?php

	 class Location extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct(){
	 		parent::__construct();
           
	 	}
	 	//_____________________________________________________
		public function index(){
			$this->view->render('location/index');
		}
		//_____________________________________________________
		public function louer($id){
            $this->view->voiture = $this->model->GetVoiture($id);
			$this->view->render('location/index');
        }
         
         function save($id){
            $data = array();
		    $data['date_d'] = $_POST['date_d'];
            $data['date_r'] = $_POST['date_r'];                        
            $data['client'] = Session::get('id');  

            $this->model->edit($data, $id);
            header('location: ../../voitures?result=voiture modifier avec succée');
		}
        function accepter($id){
        
            $this->model->accepter($id);
            header('location: ../../dashboard');
		}
         function refuser($id){
             $this->model->refuser($id);
            header('location: ../../dashboard');
		}
         
        function terminer($id){
             $this->model->terminer($id);
            header('location: ../../dashboard');
         }
		//_____________________________________________________
	 } 

?>