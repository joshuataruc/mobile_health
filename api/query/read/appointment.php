<?php 

class ReadAppointment
{
	private $appointment_table = "appointment";
	public $appointment_id;
	
	function __construct($db)
	{
		$this->conn = $db;
	}


	function read_appointment(){
		$query = 'SELECT * FROM '.$this->appointment_table.'  
				  ORDER BY appointment_id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function read_appointment_detail(){
		$query = 'SELECT * FROM '.$this->appointment_table.' 
				  WHERE appointment_id = "'.$this->appointment_id.'" 
				  ORDER BY appointment_id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;	
	}
}

 ?>