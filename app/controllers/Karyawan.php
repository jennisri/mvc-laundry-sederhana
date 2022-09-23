<?php 

class Karyawan extends Controller {

	public function index()
	{
		$data['title'] = "Halaman Karyawan";
		$data['karyawan'] = $this->model('Karyawan_model')->getAllKaryawan();
		$this->view('templates/header', $data);
		$this->view('karyawan/index', $data);
		$this->view('templates/footer');
	}


	public function tambah()
	{
		if($this->model('Karyawan_model')->tambahKaryawan($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '.BASEURL.'/karyawan');
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '.BASEURL.'/karyawan');
			exit;
		}
	}

	public function hapus($id_karyawan)
	{
		if($this->model('Karyawan_model')->hapusKaryawan($id_karyawan) > 0){
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '.BASEURL.'/karyawan');
			exit;
		}else{
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: '.BASEURL.'/karyawan');
			exit;
		}
	}

	public function detail($id_karyawan)
	{
		$data['title'] = "Halaman Detail Karyawan";
		$data['karyawan'] = $this->model('Karyawan_model')->getAllKaryawanById($id_karyawan);
		$this->view('templates/header', $data);
		$this->view('karyawan/detail', $data);
		$this->view('templates/footer');
	}

	public function ubah($id_karyawan)
	{
		$data['title'] = "Halaman Ubah Karyawan";
		$data['karyawan'] = $this->model('Karyawan_model')->getAllKaryawanById($id_karyawan);
		$this->view('templates/header', $data);
		$this->view('karyawan/ubah', $data);
		$this->view('templates/footer');
	}

	public function getUbah()
	{
		if($this->model('Karyawan_model')->ubahKaryawan($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '.BASEURL.'/karyawan');
			exit;
		}else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '.BASEURL.'/karyawan');
			exit;
		}
	}


}