<?php 

class InsertKey
{
	private $key_table = "registration_key";

	public $key;

	function __construct($db)
	{
		$this->conn = $db;
	}

	function insert_key(){
		$query = 'INSERT INTO '.$this->key_table.' 
					SET mobile_key = :key';

		$stmt = $this->conn->prepare($query);

		$this->key = htmlspecialchars(strip_tags($this->key));

		$stmt->bindParam(':key', $this->key);

		if ($stmt->execute()) {
			return true;
		}

		printf("Error: %s.\n", $stmt->error);
     	return false;
	}
}

 ?>