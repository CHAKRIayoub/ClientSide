<?php 

	/**
	* 
	*/
	class Voiture_Model extends Model
	{
		//_____________________________________ ________________
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
        
        function add($data){
            
            
  
            $params = array(
                'mat' => $data['matricule'],
                'mod' => $data['modele'],
                'mar' => $data['marque'],
                'pri' =>  $data['prix'] ,
                'ima' => $data['image'] ,
                'des' =>  $data['desciption'] ,
                'car' => $data['carburant'] ,
                'pas' => $data['passagers'],
                'vil' => $data['ville'] ,
                'opt' => $data['options'],
                'edi' => $data['editeur']
            );
            
                $result1 = $this->db->clientWS->call('add_voiture', $params);

		 }

		function del($id){

			 $params = array(
                'id' => $id,
            );

            $result1 = $this->db->clientWS->call('del_voiture', $params);

		}



		function edit($data, $id){
			  
            $params = array(
                'id'  => $id,
                'mat' => $data['matricule'],
                'mod' => $data['modele'],
                'mar' => $data['marque'],
                'pri' => $data['prix'] ,
                'ima' => $data['image'] ,
                'des' => $data['desciption'] ,
                'car' => $data['carburant'] ,
                'pas' => $data['passagers'],
                'vil' => $data['ville'] ,
                'opt' => $data['options'],
                'edi' => $data['editeur']
            );
            
            $result1 = $this->db->clientWS->call('edit_voiture', $params);
		}
        
        
       
        
        function history($id){
            $params = array(
                'id' => $id
            );

       

            $result1 =$this->db->clientWS->call('ListLocationsByV',$params);

           if (isset($result1['ListLocationsByVResult']['Resrvation'][0])) {
        
                foreach ($result1['ListLocationsByVResult']['Resrvation'] as $key => $value) {
                    
                    $params['id'] = $value['Id_v'];
                    $result2 = $this->db->clientWS->call('get_voiture',$params);
                    $params['id'] = $value['Id_u'];
                    $result3 = $this->db->clientWS->call('get_user_byId',$params);
                    $result1['ListLocationsByVResult']['Resrvation'][$key]['voiture'] = $result2['get_voitureResult'];
                    $result1['ListLocationsByVResult']['Resrvation'][$key]['user'] = $result3['get_user_byIdResult'];

                }
               
                return $result1['ListLocationsByVResult']['Resrvation'];
                

                }else if(isset($result1['ListLocationsByVResult']['Resrvation']['Id'])) {
               
                    $params['id'] = $result1['ListLocationsByVResult']['Resrvation']['Id_v'];
                    $result2 = $this->db->clientWS->call('get_voiture',$params);
                    $params['id'] = $result1['ListLocationsByVResult']['Resrvation']['Id_u'];
                    $result3 = $this->db->clientWS->call('get_user_byId',$params);
                    $result1['ListLocationsByVResult']['Resrvation']['voiture'] = $result2['get_voitureResult'];
                    $result1['ListLocationsByVResult']['Resrvation']['user'] = $result3['get_user_byIdResult'];
                    $a = array();
                    $a = $result1['ListLocationsByVResult']['Resrvation'];
                    $result1['ListLocationsByVResult']['Resrvation'] = array();
                    $result1['ListLocationsByVResult']['Resrvation'][0] = $a;
                    
                    return $result1['ListLocationsByVResult']['Resrvation'];
                    

                }else{
               
                    $result1['ListLocationsByVResult']['Resrvation'] = array();
                    return $result1['ListLocationsByVResult']['Resrvation'];
                    

                } 
        }
    }

		


		

?>