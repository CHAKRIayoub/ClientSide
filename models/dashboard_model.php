<?php 

	/**
	* 
	*/
	class Dashboard_Model extends Model
	{
		//_____________________________________ ________________
		 function __construct(){
		 	parent::__construct();
		 }
		//_____________________________________________________
        function getLocationsList($id){
            
            $params = array(
                'id' => $id
            );

            $result1 =$this->db->clientWS->call('ListLocations',$params);

           if (isset($result1['ListLocationsResult']['Resrvation'][0])) {
        
                foreach ($result1['ListLocationsResult']['Resrvation'] as $key => $value) {
                    
                    $params['id'] = $value['Id_v'];
                    $result2 = $this->db->clientWS->call('get_voiture',$params);
                    $params['id'] = $value['Id_u'];
                    $result3 = $this->db->clientWS->call('get_user_byId',$params);
                    $result1['ListLocationsResult']['Resrvation'][$key]['voiture'] = $result2['get_voitureResult'];
                    $result1['ListLocationsResult']['Resrvation'][$key]['user'] = $result3['get_user_byIdResult'];

                }
               
                return $result1['ListLocationsResult']['Resrvation'];
                exit();

                }else if(isset($result1['ListLocationsResult']['Resrvation']['Id'])) {
               
                    $params['id'] = $result1['ListLocationsResult']['Resrvation']['Id_v'];
                    $result2 = $this->db->clientWS->call('get_voiture',$params);
                    $params['id'] = $result1['ListLocationsResult']['Resrvation']['Id_u'];
                    $result3 = $this->db->clientWS->call('get_user_byId',$params);
                    $result1['ListLocationsResult']['Resrvation']['voiture'] = $result2['get_voitureResult'];
                    $result1['ListLocationsResult']['Resrvation']['user'] = $result3['get_user_byIdResult'];
                    $a = array();
                    $a = $result1['ListLocationsResult']['Resrvation'];
                    $result1['ListLocationsResult']['Resrvation'] = array();
                    $result1['ListLocationsResult']['Resrvation'][0] = $a;
                    
                    return $result1['ListLocationsResult']['Resrvation'];
                    exit();

                }else{
               
                    $result1['ListLocationsResult']['Resrvation'] = array();
                    return $result1['ListLocationsResult']['Resrvation'];
                    exit();

                } 
	   }
    }

?>