<?php 

class InsertAppointementRegistration
{
	private $appointment_reg_table = "appointment_reg_tbl";

	public $firstname;
	public $middlename;
	public $lastname;
	public $contact;
	public $appointment_id;
	public $user_id;
	public $interval;

	function __construct($db)
	{
		$this->conn = $db;
	}

	function insert_appointment_reg(){
		$query = 'INSERT INTO '.$this->appointment_reg_table.' 
					SET firstname = :firstname,
					middlename = :middlename, 
					lastname = :lastname, 
					contact = :contact, 
					appointment_id = :appointment_id,
					user_id = :user_id,
					time_interval = :interval';

		$stmt = $this->conn->prepare($query);

		$this->firstname = htmlspecialchars(strip_tags($this->firstname));
		$this->middlename = htmlspecialchars(strip_tags($this->middlename));
		$this->lastname = htmlspecialchars(strip_tags($this->lastname));
		$this->contact = htmlspecialchars(strip_tags($this->contact));
		$this->appointment_id = htmlspecialchars(strip_tags($this->appointment_id));
		$this->user_id = htmlspecialchars(strip_tags($this->user_id));
		$this->interval = htmlspecialchars(strip_tags($this->interval));

		$stmt->bindParam(':firstname', $this->firstname);
		$stmt->bindParam(':middlename', $this->middlename);
		$stmt->bindParam(':lastname', $this->lastname);
		$stmt->bindParam(':contact', $this->contact);
		$stmt->bindParam(':appointment_id', $this->appointment_id);
		$stmt->bindParam(':user_id', $this->user_id);
		$stmt->bindParam(':interval', $this->interval);

		if ($stmt->execute()) {
			return true;
		}

		printf("Error: %s.\n", $stmt->error);
     	return false;
	}
}

 ?>