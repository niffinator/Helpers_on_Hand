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
				echo "Failed to connect to the database: " . mysqli_connect_error();
			}
			else
				echo "Sucessfully connected to the database: helpers_on_hand </br>";
	}
	
	// Destructor
	public function __destruct()
	{
		mysqli_close ($this->Con);
	}
	
	// Show all the people in the database
	public function get_person_table_db()
	{
		$sql = "SELECT personid, fname, lname, midname,
					phone, email, address1, address2, city,
					state, zip, notes, background, role
				FROM person";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['personid'] . " " .
			$row['fname'] . " " .
		    $row['midname'] . " " .
			$row['lname'] . " " .
			$row['address1'] . " " .
			$row['address2'] . " " .
		    $row['city'] . " " .
			$row['state'] . " " .
			$row['zip'] . " " .
			$row['phone'] . " " .
		    $row['email'] . " " .
			$row['background'] . " " .
			$row['notes'] . " " .
			$row['role'];
		}
		echo("----");
		return($arrayResult);
	}
	
	// Show all the chores in the database
	public function get_chores_table_db()
	{
		$sql = "SELECT choreid, chorename, choredesc, noofstaff
				FROM chore";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['choreid'] . " " .
			$row['chorename'] . " " .
		    $row['choredesc'] . " " .
			$row['noofstaff'];
		}
		echo("----");
		return($arrayResult);
	}
	
	// Show all the roles in the database
	public function get_roles_table_db()
	{
		$sql = "SELECT roleid, rolename
				FROM role";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['roleid'] . " " .
			$row['rolename'];
		}
		echo("----");
		return($arrayResult);
	}

	// Show all the statuses in the database
	public function get_status_table_db()
	{
		$sql = "SELECT statusid, statusdesc
				FROM status";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['statusid'] . " " .
			$row['statusdesc'];
		}
		echo("----");
		return($arrayResult);
	}

	// Show all the volunteers in the database
	public function get_handraise_table_db()
	{
		$sql = "SELECT handraiseid, helperid, availdate,
					availtime, availchores
				FROM handraise";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['handraiseid'] . " " .
			$row['helperid'] . " " .
		    $row['availdate'] . " " .
			$row['availtime'] . " " .
			$row['availchores'];
		}
		echo("----");
		return($arrayResult);
	}

	// Show all the requests in the database
	public function get_request_table_db()
	{
		$sql = "SELECT requestid, reqclientid, reqdate,
					reqtime, reqchoreid, reqstatusid
				FROM request";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['requestid'] . " " .
			$row['reqclientid'] . " " .
		    $row['reqdate'] . " " .
			$row['reqtime'] . " " .
			$row['reqchoreid'] . " " .
			$row['reqstatusid'];
		}
		echo("----");
		return($arrayResult);
	}

	// Show all the transactions in the database
	public function get_transaction_table_db()
	{
		$sql = "SELECT transactionid, requestid, reqdate,
					reqtime, clientid, helperid1, helperid2,
					helperid3, helperid4, helperid5, managerid,
					schdate, schtime, transtatusid
				FROM transaction";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("-----</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['transactionid'] . " " .
			$row['requestid'] . " " .
		    $row['reqdate'] . " " .
			$row['reqtime'] . " " .
			$row['clientid'] . " " .
			$row['helperid1'] . " " .
		    $row['helperid2'] . " " .
			$row['helperid3'] . " " .
			$row['helperid4'] . " " .
			$row['helperid5'] . " " .
		    $row['managerid'] . " " .
			$row['background'] . " " .
			$row['schdate'] . " " .
			$row['schtime'] . " " .
		    $row['transtatusid'];
		}
		echo("----");
		return($arrayResult);
	}
	
	// Write all the get() functions from the database tables
	public function get_person_by_role_from_DB($roleid)
	{
		$sql = "SELECT person.personid, person.fname, person.lname, role.rolename
				FROM person, role
				WHERE role = '$roleid';";
		$result = mysqli_query ($this->Con,$sql);
		$arrayResult = array();
		echo("All " + role.rolename + "s:</br>");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['personid'] . " ".
			$row['fname'] . " ".
			$row['lname'] . " ".
			$row['role.rolename'];			
		}
		return($arrayResult);
	}
	
	public function get_existing_chores_from_DB()
	{
		$sql = "SELECT chorename FROM chore;";
		$result = mysqli_query($this->Con,$sql);
		$arrayResult = array();
		echo("Chore Table");
		while($row = mysqli_fetch_array($result))
		{
			$arrayResult[] = $row;
			$row['chorename'];
		}
		return($arrayResult);
	}	
}

	// -----------------------------------------------------
	// -------------END OF CLASS CODE-----------------------
	// -----------------------------------------------------
	
	
	// Write all the functions for the data entry forms	
	
				
				
				