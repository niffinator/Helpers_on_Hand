<?php

include_once("HOH_Class.php");
$myDB = new HOH("localhost","manager","hohManager","helpers_on_hand");

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if(isset($_POST['chck']))
	{
		$myDB->processPerson();
	}
}

function processPerson()
{
	$personid = $_POST['personid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$midname = $_POST['midname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$notes = $_POST['notes'];
	$background = $_POST['background'];
	$role = $_POST['role'];
	
	$sql = "INSERT INTO person ('personid', 'fname', 'lname', 'midname', 'phone',
				'email', 'address1', 'address2', 'city', 'state', 'zip', 'notes',
				'background', 'role')
			VALUES ('$personid', '$fname', '$lname', '$midname', '$phone',
				'$email', '$address1', '$address2', '$city', '$state', '$zip', '$notes',
				'$background', '$role');";
			
	$result = mysqli_query($this->Con,$sql);
	if ($result == true)
	{
		echo "New person added</br>";
	}
	else
	{
		echo "Error creating person" . mysqli_error($this->Con) ." </br>";
	}
}
