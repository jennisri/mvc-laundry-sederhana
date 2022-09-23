<?php 

class Transaksi_model {

	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllTransaksi()
	{
		$this->db->query("SELECT * FROM transaksi INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan INNER JOIN paket_laundry ON transaksi.id_paket = paket_laundry.id_paket ORDER BY id_transaksi DESC");
		return $this->db->resultSet();
	}

	public function getAllTransaksiById($id_transaksi)
	{
		$this->db->query("SELECT * FROM transaksi INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan INNER JOIN paket_laundry ON transaksi.id_paket = paket_laundry.id_paket WHERE id_transaksi = :id_transaksi");
		$this->db->bind('id_transaksi', $id_transaksi);
		return $this->db->single();
	}

	public function tambahTransaksi($data)
	{
		$query = "INSERT INTO transaksi VALUES
		('', :no_order, :id_pelanggan, :id_paket, :id_tipe, :berat, :tgl_ambil, CURRENT_TIMESTAMP, :sts_pembayaran, :sts_order)
		";

		$this->db->query($query);
		$this->db->bind('no_order', $data['no_order']);
		$this->db->bind('id_pelanggan', $data['id_pelanggan']);
		$this->db->bind('id_paket', $data['id_paket']);
		$this->db->bind('id_tipe', $data['id_tipe']);
		$this->db->bind('berat', $data['berat']);
		$this->db->bind('tgl_ambil', $data['tgl_ambil']);
		$this->db->bind('sts_pembayaran', $data['sts_pembayaran']);
		$this->db->bind('sts_order', $data['sts_order']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function ubahTransaksi($data)
	{
		$query = "UPDATE transaksi SET 
		no_order = :no_order,
		id_pelanggan = :id_pelanggan, 
		id_paket = :id_paket,
		id_tipe = :id_tipe, 
		berat = :berat,
		tgl_ambil = :tgl_ambil,
		sts_pembayaran =:sts_pembayaran, 
		sts_order = :sts_order WHERE id_transaksi = :id_transaksi
		";

		$this->db->query($query);
		$this->db->bind('no_order', $data['no_order']);
		$this->db->bind('id_pelanggan', $data['id_pelanggan']);
		$this->db->bind('id_paket', $data['id_paket']);
		$this->db->bind('id_tipe', $data['id_tipe']);
		$this->db->bind('berat', $data['berat']);
		$this->db->bind('tgl_ambil', $data['tgl_ambil']);
		$this->db->bind('sts_pembayaran', $data['sts_pembayaran']);
		$this->db->bind('sts_order', $data['sts_order']);
		$this->db->bind('id_transaksi', $data['id_transaksi']);

		$this->db->execute();
		return $this->db->rowCount();
	}

}