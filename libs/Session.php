<?php
	
	/**
	* 
	*/
	class Session
	{

		//_____________________________________________________
		public static function init(){
			@session_start(); 
		}
		//_____________________________________________________
		public static function set($key, $value){
			$_SESSION[$key] = $value;
		}
		//_____________________________________________________
		public static function get($key){
			if (isset($_SESSION[$key])) {
				return $_SESSION[$key];
			}else{
				return false ;
			}
			
		}
		//_____________________________________________________
		public static function destroy(){
			//unset($_SESSION['key']);
			session_destroy(); 
		}
		//_____________________________________________________
		
	}
?>