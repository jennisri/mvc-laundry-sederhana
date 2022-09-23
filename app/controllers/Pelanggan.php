<?php 

class Pelanggan extends Controller {

	public function index()
	{
		$data['title'] = "Halaman Data Customer";
		$data['pelanggan'] = $this->model('Pelanggan_model')->getAllPelanggan();
		$this->view('templates/header', $data);
		$this->view('pelanggan/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('Pelanggan_model')->tambahPelanggan($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '.BASEURL.'/pelanggan');
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '.BASEURL.'/pelanggan');
			exit;
		}
	}


	public function hapus($id_pelanggan)
	{
		if($this->model('Pelanggan_model')->hapusPelanggan($id_pelanggan) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/pelanggan');
			exit;
		}else{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/pelanggan');
			exit;
		}
	}

	public function ubah($id_pelanggan)
	{
		$data['title'] = 'Halaman Ubah Data Pelanggan';
		$data['pelanggan'] = $this->model('Pelanggan_model')->getAllPelangganById($id_pelanggan);

		$this->view('templates/header', $data);
		$this->view('pelanggan/ubah', $data);
		$this->view('templates/footer');
	}

	public function getubah()
	{
		if($this->model('Pelanggan_model')->ubahMahasiswa($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '.BASEURL.'/pelanggan');
			exit;
		}else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '.BASEURL.'/pelanggan');
			exit;
		}
	}




}