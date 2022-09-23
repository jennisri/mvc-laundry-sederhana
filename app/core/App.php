<?php 

class App {
	// tambah property default
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{
		$url = $this->parseURL();
		// untuk controller nya
		if(file_exists('../app/controllers/'. $url[0] . '.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once '../app/controllers/'.$this->controller .'.php';
		// kelasnya diinstansiasi agar bisa manggil method
		$this->controller = new $this->controller;

		// untuk method nya
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// untuk params atau parameter isi data
		if(!empty($url)){
			$this->params = array_values($url);
		}

		// jalankan controller dan method serta kirimkan params jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);
	}


	public function parseURL()
	{
		if(isset($_GET['url'])){
			// menggunakan fungsi rtrim untuk menghapus tanda /
			$url = rtrim($_GET['url'], '/');
			// bersihkan url
			$url = filter_var($url, FILTER_SANITIZE_URL);
			// pecah url nya berdasarkan tanda /
			$url = explode('/', $url);
			return $url;
		}
	}




}