<?php 

class Pembayaran extends Controller {

	public function index()
	{
		$data['title'] = 'Halaman Tipe Pembayaran';
		$data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$this->view('templates/header', $data);
		$this->view('pembayaran/index', $data);
		$this-> view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('Pembayaran_model')->tambahPembayaran($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '.BASEURL.'/pembayaran');
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '.BASEURL.'/pembayaran');
			exit;
		}
	}

	public function hapus($id_tipe)
	{
		if($this->model('Pembayaran_model')->hapusPembayaran($id_tipe) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/pembayaran');
			exit;
		}else{
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/pembayaran');
		}
	}

	public function ubah($id_tipe)
	{
		$data['title'] = 'Halaman Ubah';
		$data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaranById($id_tipe);
		$this->view('templates/header', $data);
		$this->view('pembayaran/ubah', $data);
		$this->view('templates/footer');
	}

	public function getubah()
	{
		if($this->model('Pembayaran_model')->ubahPembayaran($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '.BASEURL.'/pembayaran');
			exit;
		}else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '.BASEURL.'/pembayaran');
			exit;
		}
	}
	
}