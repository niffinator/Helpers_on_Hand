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

	$Person_id = $_POST['Person_id'];
	$f_name = $_POST['f_name'];
	$m_int = $_POST['m_int'];
	$l_name = $_POST['l_name'];
	$Background_check = $_POST['Background_check'];
	$Role_type = $_POST['Role_type'];
	$A_street_line_1 = $_POST['A_street_line_1'];
	$A_street_line_2 = $_POST['A_street_line_2'];
	$A_city = $_POST['A_city'];
	$A_state = $_POST['A_state'];
	$A_zip = $_POST['A_zip'];
	$Phone = $_POST['Phone'];
	$Email = $_POST['Email'];
	$Special_notes = $_POST['Special_notes'];
	
	$sql = "INSERT INTO name (`f_name', 'l_name;, 'm_int', Person_id')
			VALUES ('$f_name', '$l_name', '$m_int', '$Person_id');";
			
	$result = mysqli_query($this->Con,$sql);
	if ($result == true)
	{
		echo "Successfully added to name table</br>";
	}
	else
	{
		echo "Error Creating name" . mysqli_error($this->Con) ." </br>";
	}
	
	$sql = "INSERT INTO Person ('Person_id', 'Phone', 'Email', 'Special_notes', 'Background_check', 'Role_type')
			VALUES ('$Person_id', '$Phone', '$Email', '$Special_notes', '$Background_check', '$Role_type');";
	
	$result = mysqli_query($this->Con,$sql);
	if ($result == true)
	{
		echo "Successfully added person</br>";
	}
	else
	{
		echo "Error Adding personal details" . mysqli_error($this->Con) ." </br>";
	}	
}
