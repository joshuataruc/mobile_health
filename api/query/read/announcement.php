<?php 

class ReadAnnouncement
{
	private $announcement_table = "announcement_tbl";
	public $announcement_id;
	
	function __construct($db)
	{
		$this->conn = $db;
	}


	function read_announcement(){
		$query = 'SELECT * FROM '.$this->announcement_table.'  
				  ORDER BY announcement_id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function read_announcement_detail(){
		$query = 'SELECT * FROM '.$this->announcement_table.' 
				  WHERE announcement_id = "'.$this->announcement_id.'" 
				  ORDER BY announcement_id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;	
	}
}

 ?>