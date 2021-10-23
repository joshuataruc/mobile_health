<?php 

class ReadUser
{
	private $user_table = "user_information_tbl";
	public $username;
	public $password;
	
	function __construct($db)
	{
		$this->conn = $db;
	}

	function read_user_detail(){
		$query = 'SELECT * FROM '.$this->user_table.' 
				  WHERE username = "'.$this->username.'" 
				  AND password = "'.$this->password.'"
				  ORDER BY id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;	
	}
}

 ?>