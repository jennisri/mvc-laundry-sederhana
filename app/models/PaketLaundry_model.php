<?php 

class PaketLaundry_model {
	// private $tabel = 'paket_laundry';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPaketLaundry()
	{
		$this->db->query('SELECT * FROM paket_laundry ORDER BY id_paket DESC');
		return $this->db->resultSet();
	}

	public function getPaketLaundrybyId($id_paket)
	{
		$this->db->query('SELECT * FROM paket_laundry WHERE id_paket=:id_paket');
		$this->db->bind('id_paket', $id_paket);
		return $this->db->single();
	}

	public function tambahPaketLaundry($data)
	{
		$query = "INSERT INTO paket_laundry VALUES
		('', :jenis_paket, :harga)
		";

		$this->db->query($query);
		$this->db->bind('jenis_paket', $data['jenis_paket']);
		$this->db->bind('harga', $data['harga']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function HapusPaketLaundry($id_paket)
	{
		$query = "DELETE FROM paket_laundry WHERE id_paket = :id_paket";

		$this->db->query($query);

		$this->db->bind('id_paket', $id_paket);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function ubahPaketLaundry($data)
	{
		$query = "UPDATE paket_laundry SET
		jenis_paket	= :jenis_paket,
		harga = :harga WHERE id_paket = :id_paket
		";

		$this->db->query($query);
		$this->db->bind('jenis_paket', $data['jenis_paket']);
		$this->db->bind('harga', $data['harga']);
		$this->db->bind('id_paket', $data['id_paket']);

		$this->db->execute();
		return $this->db->rowCount();
	}

}