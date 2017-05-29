<?php 

	/**
	* 
	*/
	class Location_Model extends Model
	{
		//_____________________________________________________
		function __construct(){
		 	parent::__construct();
		}
		//_____________________________________________________
		function GetVoiture($id){
             $params = array(
                            'id' => $id,
                        );
                $result1 = $this->db->clientWS->call('get_voiture', $params);

                return $result1['get_voitureResult'];

		}
        
        function edit($data, $id){
			  
            $params = array(
                 'idv'  => $id ,
                 'date_dd'  => $data['date_d'] ,
                 'date_ff'  => $data['date_r'] ,                     
                 'idc'  => $data['client'] 
            );
            
            $result1 = $this->db->clientWS->call('save_location', $params);
		}
        
        function accepter($id){
			  
            $params = array(
                 'id'  => $id ,
            );
            
            $result1 = $this->db->clientWS->call('set_accepted', $params);
		}
        
        function refuser($id){
			  
            $params = array(
                 'id'  => $id ,
            );
            
            $result1 = $this->db->clientWS->call('set_refused', $params);
		}
        
        function terminer($id){
			  
            $params = array(
                 'id'  => $id ,
            );
            
            $result1 = $this->db->clientWS->call('terminer', $params);
		}
		 //_____________________________________________________
	}

?>