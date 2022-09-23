<?php 

class Login extends Controller {

	public function index()
	{
		$data['title'] = "Halaman Login";
		$this->view('login/index', $data);
	}

	public function getlogin()
	{
		if($row = $this->model('Login_Model')->checkLogin($_POST) > 0 ) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['session_login'] = 'sudah_login'; 

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);

			header('Location: '. BASEURL);
		} else {
			Flasher::setFlash('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/login');
			exit;	
		}
		
	}
}


