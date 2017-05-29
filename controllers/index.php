<?php

	/**
	 * 
	 */
	 class index extends Controller
	 {
	 	//_____________________________________________________
	 	function __construct(){
	 		//echo Hash::create;('md5','test', '');
	 		parent::__construct();
	 	}
	 	//_____________________________________________________
	 	public function index(){
	 		$this->view->render('index/index');
	 	}
	 	//_____________________________________________________
	 	public function details(){
	 		$this->view->render('index');
	 	}
		//_____________________________________________________

	 } 

?>