<?php 

class Pelanggan_model {

	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPelanggan()
	{
		$this->db->query('SELECT * FROM pelanggan ORDER BY id_pelanggan DESC');
		return $this->db->resultSet();
	}

	public function getAllPelangganById($id_pelanggan)
	{
		$this->db->query('SELECT * FROM pelanggan WHERE id_pelanggan = :id_pelanggan');

		$this->db->bind('id_pelanggan', $id_pelanggan);
		return $this->db->single();
	}

	public function tambahPelanggan($data)
	{
		$query = "INSERT INTO pelanggan VALUES
		('', :nama, :alamat, :telepon, :jenis_kelamin)
		";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('telepon', $data['telepon']);
		$this->db->bind('jenis_kelamin', $data['jenis_kelamin']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function hapusPelanggan($id_pelanggan)
	{
		$query = "DELETE FROM pelanggan WHERE id_pelanggan = :id_pelanggan";

		$this->db->query($query);
		$this->db->bind('id_pelanggan', $id_pelanggan);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function ubahMahasiswa($data)
	{
		$query = "UPDATE pelanggan SET
		nama = :nama,
		alamat = :alamat,
		telepon = :telepon,
		jenis_kelamin = :jenis_kelamin
		WHERE id_pelanggan = :id_pelanggan
		";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('telepon', $data['telepon']);
		$this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
		$this->db->bind('id_pelanggan', $data['id_pelanggan']);

		$this->db->execute();
		return $this->db->rowCount();
	}









}