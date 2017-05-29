<?php
    class voitures_Model extends Model
    {
        function __construct(){
		 	parent::__construct();
		}
        
        function getPostsList(){
            
            $result1 = $this->db->clientWS->call('ListVoiture');  
            
            if (isset($result1['ListVoitureResult']['Voiture'][0])) {
                
                return $result1['ListVoitureResult']['Voiture'];
                exit();
                
            }else if(isset($result1['ListVoitureResult']['Voiture']['Id'])){
                 $a = array();
                 $a = $result1['ListVoitureResult']['Voiture'];
                 $result1['ListVoitureResult']['Voiture'] = array();
                 $result1['ListVoitureResult']['Voiture'][0] = $a;
                 return $result1['ListVoitureResult']['Voiture'];
                 exit();
            }else{
                
                $result1['ListVoitureResult']['Voiture'] = array();
                $a = array();

            }
            
        }
        
         function getVoituresL(){
            
            $result1 = $this->db->clientWS->call('ListVoitureL'); 
            
            
            if (isset($result1['ListVoitureLResult']['Voiture'][0])) {
                
                foreach ($result1['ListVoitureLResult']['Voiture'] as $key => $value) {
                    
                    $params['id'] = $value['Id'];
                    $result2 = $this->db->clientWS->call('VoitureQuiL',$params);
                    $result1['ListVoitureLResult']['Voiture'][$key]['user'] = $result2['VoitureQuiLResult'];
                    
                }
                
                
                
                return $result1['ListVoitureLResult']['Voiture'];
                 
                exit();
                
            }else if(isset($result1['ListVoitureLResult']['Voiture']['Id'])){
                
                $params['id'] = $result1['ListVoitureLResult']['Voiture']['Id'];
                    $result2 = $this->db->clientWS->call('VoitureQuiL',$params);
                    $result1['ListVoitureLResult']['Voiture']['user'] = $result2['VoitureQuiLResult'];
                 $a = array();
                 $a = $result1['ListVoitureLResult']['Voiture'];
                 $result1['ListVoitureLResult']['Voiture'] = array();
                 $result1['ListVoitureLResult']['Voiture'][0] = $a;
                 return $result1['ListVoitureLResult']['Voiture'];
                 exit();
                
            }else{
                
                $result1['ListVoitureLResult']['Voiture'] = array();
                $a = array();

            }
            
        }
        
        
       
    }
?>