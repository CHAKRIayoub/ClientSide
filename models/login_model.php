<?php 

	/**
	* 
	*/
	class Login_Model extends Model
	{
		//_____________________________________________________
		function __construct(){
		 	parent::__construct();
		}
		//_____________________________________________________
		public function run()
		{
            
            $params = array(
                        'login' =>  $_POST['login'],
                        'pass' => $_POST['password']
            );
            
            $result1 = $this->db->clientWS->call('user_exist', $params);
		 	
            if($result1['user_existResult'] == 'true' ){
                
                $params = array(
                    'login' => $_POST['login'],
                    'pass' => $_POST['password']
                );
                
                $result1 = $this->db->clientWS->call('get_user', $params);
                
                Session::init();
                Session::set('loggedIn', true);
                Session::set('role', $result1['get_userResult']['Role'] );
                Session::set('login', $_POST['login'] );
                Session::set('id', $result1['get_userResult']['Id'] );
                
                header('location: ../dashboard');
                    
		 	}
		 	else{
                
		 		header('location: ../login'); 
                
		 	}

		 }
		 //_____________________________________________________
        public function inscr($data){
           
            $params = array(
                 'cin'  => $data['cin'] ,
                 'nom'  => $data['nom'] ,
                 'pre'  => $data['pre'] ,                     
                 'tel'  => $data['tel'] ,
                 'adr'  => $data['adr'] ,
                 'log'  => $data['log'] ,
                 'pas'  => $data['pas'] 
            );
            
            $result1 = $this->db->clientWS->call('add_user', $params);
		    header('location: ../login'); 

        }
	}

?>