<?php 

	/**
	* 
	*/
	class User_Model extends Model
	{
		//_____________________________________ ________________
		 function __construct(){

		 	parent::__construct();

		 }
		//_____________________________________________________
		function Getlist(){

			$sth = $this->db->prepare('SELECT id, login, role FROM users');
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute();
			$data = $sth->fetchAll();
			return $data;
			
		}
		function add($data){
            
            
            
		 	$sth = $this->db->prepare('INSERT INTO users (login, password, role, nom) VALUES (:login, :password, :role, :nom)');
		 	$sth->execute(array(':login' =>  $data['login'],
		 						':password' =>  $data['password'],
		 						':role' =>  $data['role'],
                                ':nom' =>  $data['nom']
		 	));


		 }

		function del($id){

			$sth = $this->db->prepare('
		 		DELETE FROM users WHERE users.id = (:id)
		 	');
		 	$sth->execute(array(':id' =>  $id));

		}



		function edit($data, $id){
			$sth = $this->db->prepare('
		 		UPDATE users 
		 		SET login = (:login), password = (:password), role = (:role) 
		 		WHERE id = (:id);
		 	');
		 	$sth->execute(array(':id' =>  $id,
		 						':login' =>  $data['login'],
		 						':password' =>  $data['password'],
		 						':role' =>  $data['role']
		 	));
		}
        
        
        function Getuser($id){

			$sth = $this->db->prepare('SELECT id, login, role FROM users WHERE id = (:id) ');
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute(array(':id' => $id ));
			$data = $sth->fetchAll();
			return $data;

		}

	}

?>