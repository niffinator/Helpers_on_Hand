<?php

class HOH
{
	private $HostName;
	private $UserID;
	private $Password;
	private $DBName;
	private $Con;
	
	// Constructor
	public function __construct ($host = NULL, $uid = NULL, $pw = NULL, $db = NULL)
	{
		$this->HostName = $host;
		$this->UserID = $uid;
		$this->Password = $pw;
		$this->DBName = $db;
		$this->Con = mysqli_connect ($host, $uid, $pw, $db);
		
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			else
				echo "Sucessful connection to MySQL </br>";
				echo "";			
	}
	
	// Destructor
	public function __destruct()
	{
		mysqli_close ($this->Con);
	}
	
	// Write all the get() functions from the database tables
	public function get_person_by_role_from_DB($roleType)
	{
		$sql = "SELECT name.Person_id, name.f_name, name.l_name, person.Role_type
				FROM person, name
				WHERE person.Role_type = '$roleType'
				AND person.Person_id = name.Person_id;";
		$result = mysqli_query ($this->Con,$sql);
		$arrayResult = array();
		echo("Participants by role");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['Person_id'] . " ".
			$row['f_name'] . " ".
			$row['f_name'] . " ".
			$row['Role_type'];
			
		}
		return($arrayResult);
	}
	
	public function get_existing_chores_from_DB()
	{
		$sql = "SELECT Chore_name FROM chore;";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("Chore Table");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['Chore_name'];
		}
		return($arrayResult);
	}
	
	public function get_all_users_from_DB()
	{
		$sql = "SELECT name.Person_id, name.f_name, name.m_int, name.l_name,
				address.A_street_line_1, address.A_street_line_2, address.A_city,
				address.A_state, address.A_zip, person.Phone, person.Email
				FROM name, address, person
				WHERE name.Person_id = address.Person_id
				AND name.Person_id = person.Person_id;";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("All Users");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['Person_id'] . ": " .
			$row['f_name'] . " " .
			$row['m_int'] . " " .
			$row['l_name'] . "Address: " .
			$row['A_street_line_1'] . " " .
			$row['A_street_line_2'] . " " .
			$row['A_city'] . ", " .
			$row['A_state'] . "  " .
			$row['A_zip'];					
		}
		return($arrayResult);
	}		
}

	// -----------------------------------------------------
	// -------------END OF CLASS CODE-----------------------
	// -----------------------------------------------------
	
	
	// Write all the functions for the data entry forms	
	
				
				
				