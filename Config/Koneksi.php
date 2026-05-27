<?php

class Koneksi{
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $db_name = 'edupay';
	private $connect = false;

	public function __construct(){
		$this->connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);

		if(!$this->connect){
			die("Koneksi gagal: " . mysqli_connect_error());
		}
	}

	public function getConnection() {
		return $this->connect;
	}
}
?>

