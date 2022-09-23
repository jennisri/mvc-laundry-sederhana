<?php 

class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	// variabel untuk koneksi
	private $dbh;
	private $stmt;

	// buat construct agar langsung dijalankan 
	public function __construct()
	{
		// data source name
		$dsn = 'mysql:hots='. $this->host . ';dbname='. $this->db_name;

		// BUTUH PARAMETER BARU
		// ISINYA ARRAY, YANG MERUPAKAN PARAMETER DARI KOFIGURASI
		$option = [
			// UNTUK MEMBUAT KONEKSI NYA TERJAGA TERUS
			PDO::ATTR_PERSISTENT => true,
			// UNTUK MODE ERROR TAMPILKAN EXCEPTION
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null)
	{
		if(is_null($type)){
			switch (true) {
				case is_int($value):
				$type = PDO::PARAM_INT;
				break;
				
				case is_bool($value):
				$type = PDO::PARAM_BOOL;
				break;

				case is_null($value):
				$type = PDO::PARAM_NULL;
				break;

				default:
				$type = PDO::PARAM_STR;
			}
		}

		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute()
	{
		$this->stmt->execute();
	}

	// untuk menampilkan banyak data
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// untuk menampilkan satu data
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	// untuk menghitung ada berapa baris yang baru berubah didalam tabel nya
	// ROWCOUNT MILIK KITA
	public function rowCount(){
		// ROWCOUNT MILIK PDO
		return $this->stmt->rowCount();
	}
	
}