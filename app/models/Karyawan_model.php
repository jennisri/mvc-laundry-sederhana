<?php 

class Karyawan_model {

	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllKaryawan()
	{
		$this->db->query('SELECT * FROM karyawan ORDER BY id_karyawan DESC');
		return $this->db->resultSet();
	}

	public function getAllKaryawanById($id_karyawan)
	{
		$this->db->query('SELECT * FROM karyawan WHERE id_karyawan = :id_karyawan');
		$this->db->bind('id_karyawan', $id_karyawan);
		return $this->db->single();
	}


	public function tambahKaryawan($data)
	{

		$query = "INSERT INTO karyawan VALUES
		('', :nama_karyawan, :username, :password, :alamat_karyawan, :nohp, :gender, :role)
		";


		$this->db->query($query);
		$this->db->bind('nama_karyawan', $data['nama_karyawan']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
		$this->db->bind('alamat_karyawan', $data['alamat_karyawan']);
		$this->db->bind('nohp', $data['nohp']);
		$this->db->bind('gender', $data['gender']);
		$this->db->bind('role', $data['role']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function hapusKaryawan($id_karyawan)
	{
		$query = "DELETE FROM karyawan WHERE id_karyawan = :id_karyawan";

		$this->db->query($query);
		$this->db->bind('id_karyawan', $id_karyawan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahKaryawan($data)
	{
		$query= "UPDATE karyawan SET 
		nama_karyawan = :nama_karyawan,
		username = :username,
		password = :password,
		alamat_karyawan = :alamat_karyawan,
		nohp = :nohp,
		gender = :gender,
		role = :role WHERE id_karyawan = :id_karyawan
		";

		$this->db->query($query);
		$this->db->bind('nama_karyawan', $data['nama_karyawan']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
		$this->db->bind('alamat_karyawan', $data['alamat_karyawan']);
		$this->db->bind('nohp', $data['nohp']);
		$this->db->bind('gender', $data['gender']);
		$this->db->bind('role', $data['role']);
		$this->db->bind('id_karyawan', $data['id_karyawan']);

		$this->db->execute();
		return $this->db->rowCount();
	}








}