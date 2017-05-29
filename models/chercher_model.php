<?php 

	/**
	* 
	*/
	class Chercher_Model extends Model
	{
		//_____________________________________ ________________
		 function __construct(){
		 	parent::__construct();
		 }
		//_____________________________________________________
	
		function xhrGetlist(){
            $params = array(

                'cle' => $_POST['cle']

            );

            $result1 = $this->db->clientWS->call('live_searche',  $params);

           
            if (isset($result1['live_searcheResult']['Voiture'][0])) {
                
                echo json_encode($result1 ['live_searcheResult']['Voiture']);
                exit();
                
                
            }else if(isset($result1['live_searcheResult']['Voiture']['Id'])){
                
                 $a = array();
                 $a = $result1['live_searcheResult']['Voiture'];
                 $result1['live_searcheResult']['Voiture'] = array();
                 $result1['live_searcheResult']['Voiture'][0] = $a;
                
                echo json_encode($result1 ['live_searcheResult']['Voiture']);
                exit();
                
                
            }else{
                
                $result1['live_searcheResult']['Voiture'] = array();
                echo json_encode($result1 ['live_searcheResult']['Voiture']);
                exit();

            }
            
			
		}
		

	}

?>