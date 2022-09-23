<?php 

class Pembayaran_model {
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPembayaran()
	{
		$this->db->query('SELECT * FROM tipe_pembayaran ORDER BY id_tipe DESC');
		return $this->db->resultSet();
	}

	public function getAllPembayaranById($id_tipe)
	{
		$this->db->query('SELECT * FROM tipe_pembayaran WHERE id_tipe = :id_tipe');
		$this->db->bind('id_tipe', $id_tipe);
		return $this->db->single();
	}

	public function tambahPembayaran($data)
	{
		$query = "INSERT INTO tipe_pembayaran VALUES 
		('', :nama_pembayaran)
		";

		$this->db->query($query);
		$this->db->bind('nama_pembayaran', $data['nama_pembayaran']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function hapusPembayaran($id_tipe)
	{
		$query = 'DELETE FROM tipe_pembayaran WHERE id_tipe = :id_tipe';

		$this->db->query($query);
		$this->db->bind('id_tipe', $id_tipe);

		$this->db->execute();
		return $this->db->rowCount();
	}
	
	public function ubahPembayaran($data)
	{
		$query = 'UPDATE tipe_pembayaran SET 
		nama_pembayaran = :nama_pembayaran
		WHERE id_tipe = :id_tipe
		';

		$this->db->query($query);
		$this->db->bind('nama_pembayaran', $data['nama_pembayaran']);
		$this->db->bind('id_tipe', $data['id_tipe']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}