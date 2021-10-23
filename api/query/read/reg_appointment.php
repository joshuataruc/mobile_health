<?php 

class ReadAppointment
{
	private $appointment_reg_table = "appointment_reg_tbl";
	public $user_id;
	public $appointment_id;
	
	function __construct($db)
	{
		$this->conn = $db;
	}


	function read_appointment(){
		$query = 'SELECT a.appointment_id,
					 	 a.appointment_name,
					 	 a.appointment_date,
					 	 a.appointment_time,
					 	 a.appointment_end,
					 	 r.time_interval 
					FROM '.$this->appointment_reg_table.' as r 
					INNER JOIN appointment AS a  
					ON a.appointment_id = r.appointment_id 
					WHERE r.user_id = "'.$this->user_id.'" 
				    ORDER BY r.id DESC';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function read_appointment_detail(){
		$query = 'SELECT * FROM '.$this->appointment_reg_table.' 
				  WHERE appointment_id = "'.$this->appointment_id.'" 
				  AND user_id = "'.$this->user_id.'"';

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;	
	}

}

 ?>