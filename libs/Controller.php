<?php 
	/**
	* 
	*/
	class Controller
	{
		//_____________________________________________________
		public $view;
		//_____________________________________________________
		function __construct(){
			$this->view = new View();
		}
		//_____________________________________________________
		public function loadModel($name){
			$path = 'models/'.$name.'_model.php';
			if (file_exists($path)) {
				require $path;
				$modelName = $name .'_Model';
				$this->model = new $modelName();
			}else {
				//echo "loadModel fail errrrrrrrrror";
			}
		}
		//_____________________________________________________
	}
?>