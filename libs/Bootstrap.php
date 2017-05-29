 <?php
	class Bootstrap 
	{
		//_____________________________________________________
		function __construct()
		{
			$url = isset($_GET['url']) ? $_GET['url'] : null ;
			$url = rtrim($url, '/');
			$url = explode('/', $url);

			//print_r($url);

			if (empty($url[0])) {
				require 'controllers/index.php';
				$controller = new index();
				$controller->index();
				return false;
			}
			$file = 'controllers/'. $url[0] . '.php';
			if (file_exists($file)) {
				require $file;
			}else{
				require 'controllers/Error.php';
				$controller = new Error();
				return false;
			}
			$controller = new $url[0];
			$controller->loadModel($url[0]); 

			//calling methods

			if (isset($url[1]) || isset($url[2]) ) {
				if (method_exists($controller, $url[1])) {
					if (isset($url[2])) {
						$controller->{$url[1]}($url[2]);
					}else{
						$controller->{$url[1]}();
					}
					
				}else{
					require 'controllers/Error.php';
					$controller = new Error();
					return false;
				}
			}else {
				if (isset($url[1])) {
					$controller->{$url[1]}();
				}else{
					$controller->index();
				}
			}
		}
		//_____________________________________________________
	}
?>