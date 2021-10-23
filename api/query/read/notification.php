<?php 

class ReadNotification
{
	private $notification_table = "notification_tbl";
	public $notification_id;
	
	function __construct($db)
	{
		$this->conn = $db;
	}


	function read_notification(){
		$query = 'SELECT * FROM '.$this->notification_table.'  
				  ORDER BY notification_id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function read_notification_detail(){
		$query = 'SELECT * FROM '.$this->notification_table.' 
				  WHERE notification_id = "'.$this->notification_id.'" 
				  ORDER BY notification_id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;	
	}
}

 ?>