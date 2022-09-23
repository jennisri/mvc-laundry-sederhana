<?php 

class PaketLaundry extends Controller {

	public function index()
	{
		$data['title'] = 'Halaman Paket Laundry';
		$data['paketlaundry'] = $this->model('PaketLaundry_model')->getAllPaketLaundry();
		$this->view('templates/header', $data);
		$this->view('paketlaundry/index', $data);
		$this-> view('templates/footer');
	}
	public function detail($id_paket)
	{
		$data['title'] = 'Detail Paket Laundry';
		$data['paketlaundry'] = $this->model('PaketLaundry_model')->getPaketLaundrybyId($id_paket);
		$this->view('templates/header', $data);
		$this->view('paketlaundry/detail', $data);
		$this-> view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('PaketLaundry_model')->tambahPaketLaundry($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '.BASEURL.'/paketlaundry');
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '.BASEURL.'/paketlaundry');
			exit;
		}
	}

	public function hapus($id_paket)
	{
		if($this->model('PaketLaundry_model')->HapusPaketLaundry($id_paket) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/paketlaundry');
			exit;
		}else{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/paketlaundry');
			exit;
		}
	}

	// public function getubah()
	// {
	// 	echo json_encode($this->model('PaketLaundry_model')->getPaketLaundrybyId($_POST['id_paket']));
	// }

	public function getubah()
	{
		if($this->model('PaketLaundry_model')->ubahPaketLaundry($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '.BASEURL.'/paketlaundry');
			exit;
		}else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '.BASEURL.'/paketlaundry');
			exit;
		}
	}

	public function ubah($id_paket)
	{
		$data['title'] = 'Ubah Paket Laundry';
		$data['paketlaundry'] = $this->model('PaketLaundry_model')->getPaketLaundrybyId($id_paket);
		$this->view('templates/header', $data);
		$this->view('paketlaundry/ubah', $data);
		$this-> view('templates/footer');
	}

}