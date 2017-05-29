<?php



class Imprimer_Model extends Model
	{
		//_____________________________________ ________________
		 function __construct(){
		 	parent::__construct();
		 }
    
         public function get_res($id){
             
             $params['id'] = $id;
             
             $result = $this->db->clientWS->call('get_reservation',$params);
             
             $params['id'] = $result['get_reservationResult']['Id_u'];
             $result1 = $this->db->clientWS->call('get_user_byId',$params);
             
             $params['id'] = $result['get_reservationResult']['Id_v'];
             $result2 = $this->db->clientWS->call('get_voiture',$params);
             
             $result['get_reservationResult']['voiture'] = $result2['get_voitureResult'];
             $result['get_reservationResult']['user'] = $result1['get_user_byIdResult'];
                    
             /*$a = array();
                    
             $a = $result1['get_reservationsResult']['Resrvation'];
                    
             $result1['get_reservationResult']['Resrvation'] = array();
                    
             $result1['get_reservationResult']['Resrvation'][0] = $a;*/
                    
                    
             return $result['get_reservationResult'];
             
             
             
             
             
             
             
             
             
         }
}



?>
		