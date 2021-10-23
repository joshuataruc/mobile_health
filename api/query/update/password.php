<?php 

class UpdatePassword
{
	private $user_information_table = "user_information_tbl";

	public $password;
	public $contact;
	public $profile;
	public $user_id;

	function __construct($db)
	{
		$this->conn = $db;
	}

	function update_password(){
		$query = 'UPDATE '.$this->user_information_table.' 
					SET password = :password 
					WHERE id = "'.$this->user_id.'"';

		$stmt = $this->conn->prepare($query);

		$this->password = htmlspecialchars(strip_tags($this->password));

		$stmt->bindParam(':password', $this->password);

		if ($stmt->execute()) {
			return true;
		}

		printf("Error: %s.\n", $stmt->error);
     	return false;
	}

	function update_contact(){
		$query = 'UPDATE '.$this->user_information_table.' 
					SET cont_number = :contact 
					WHERE id = "'.$this->user_id.'"';

		$stmt = $this->conn->prepare($query);

		$this->contact = htmlspecialchars(strip_tags($this->contact));

		$stmt->bindParam(':contact', $this->contact);

		if ($stmt->execute()) {
			return true;
		}

		printf("Error: %s.\n", $stmt->error);
     	return false;
	}

	function update_profile(){
		$query = 'UPDATE '.$this->user_information_table.' 
					SET profile = :profile 
					WHERE id = "'.$this->user_id.'"';

		$stmt = $this->conn->prepare($query);

		$this->profile = htmlspecialchars(strip_tags($this->profile));

		$stmt->bindParam(':profile', $this->profile);

		if ($stmt->execute()) {
			return true;
		}

		printf("Error: %s.\n", $stmt->error);
     	return false;
	}
}

 ?>