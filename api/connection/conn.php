<?php 
	class Database
	{

		private $hostname = 'localhost';
		private $username = 'root';
		private $dbname = 'mobile_health';
		private $password = '';
		private $conn = '';

		public function connect(){
			$this->conn = null;

			try {

				$this->conn = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->dbname, $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			} catch (PDOException $e) {
				echo '{"Message":"Failure"}';
			}

			return $this->conn;

		}

	}

 ?>
