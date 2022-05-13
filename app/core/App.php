<?php 

class App {

	public $controller = 'Home';
	public $method = 'index';
	public $params = [];

		public function __construct(){

			$url = $this->parseUrl();

			//controller
			if ($url == true) {
				if (file_exists('app/controllers/' . $url[0] . '.php' )) {
					$this->controller = $url[0];
					unset($url[0]);
			 }
			}

			//===========panggil controllernya terus instansiasi :v==============
			require_once('app/controllers/' . $this->controller . '.php');
			$this->controller = new $this->controller ;

		   	//======================Method===========================
			if (isset($url[1])) {
				if (method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			//parameter
				if (!empty($url)) {
					$this->params = array_values($url);
				}

		  	//jalankan controller, method, dan parameternya
				call_user_func_array([$this->controller, $this->method], $this->params);

		}
	
		public function parseUrl(){
			if (isset($_GET['url'])) {
					$url = rtrim($_GET['url'], '/');
					$url = filter_var($url, FILTER_SANITIZE_URL);
					$url = explode('/', $url);
					return $url;
			}	
		}
	}
 
