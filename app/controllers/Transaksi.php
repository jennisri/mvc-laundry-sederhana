<?php 

class Transaksi extends Controller {

	public function index()
	{
		$data['title'] = "Halaman Transaksi";
		$data['transaksi'] = $this->model('Transaksi_model')->getAllTransaksi();
		$this->view('templates/header', $data);
		$this->view('transaksi/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		// jadikan array
		$data = [
			'title' => 'Halaman Tambah Transaksi',
			'pelanggan' => $this->model('Pelanggan_model')->getAllPelanggan(),
			'paketlaundry' => $this->model('PaketLaundry_model')->getAllPaketLaundry(),
			'pembayaran' => $this->model('Pembayaran_model')->getAllPembayaran()
		];
		
		// $data['paketlaundry'] = $this->model('PaketLaundry_model')->getAllPaketLaundry();
		// $data['pembayaran'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$this->view('templates/header', $data);
		$this->view('transaksi/tambah', $data);
		$this->view('templates/footer');	
	}

	public function gettambah()
	{
		if($this->model('Transaksi_model')->tambahTransaksi($_POST) > 0){
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '.BASEURL.'/transaksi');
			exit;
		}else{
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '.BASEURL.'/transaksi');
			exit;
		}
	}

	public function detail($id_transaksi)
	{
		$data['title'] = "Halaman Detail Transaksi";
		$data['transaksi'] = $this->model('Transaksi_model')->getAllTransaksiById($id_transaksi);
		$this->view('templates/header', $data);
		$this->view('transaksi/detail', $data);
		$this->view('templates/footer');
	}

	public function ubah($id_transaksi)
	{

		// jadikan array
		$data = [
			'title' => 'Halaman Ubah Transaksi',
			'pelanggan' => $this->model('Pelanggan_model')->getAllPelanggan(),
			'paketlaundry' => $this->model('PaketLaundry_model')->getAllPaketLaundry(),
			'pembayaran' => $this->model('Pembayaran_model')->getAllPembayaran(),
			'transaksi' => $this->model('Transaksi_model')->getAllTransaksiById($id_transaksi)
		];
		$this->view('templates/header', $data);
		$this->view('transaksi/ubah', $data);
		$this->view('templates/footer');
	}

	public function getubah()
	{
		if($this->model('Transaksi_model')->ubahTransaksi($_POST) > 0){
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '.BASEURL.'/transaksi');
			exit;
		}else{
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '.BASEURL.'/transaksi');
			exit;
		}
	}



}