<?php

include_once("HOH_Class.php");
$myDB = new HOH("localhost","manager","hohManager","helpers_on_hand");

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if(isset($_POST['chck']))
	{
		$myDB->processForm();
	}
}




//-------------------------------------------------------
function processForm()
{

	$EmailTextBox = $_POST['EmailTextBox'];
	$FNTextBox = $_POST['FNTextBox'];
	$LNTextBox = $_POST['LNTextBox'];
	$GenderRadio = $_POST['GenderRadio'];
	$IntCheckBox = $_POST['chck'];
	$currentDate = date('Y-m-d H:i:s');
	
	$sql = "INSERT INTO member (`Email`, `FirstName`, `LastName`, `Gender`, `MemberSince`, `Picture`)
			VALUES ('$EmailTextBox', '$FNTextBox', '$LNTextBox', '$GenderRadio', '$currentDate' , 'picture.jpg');";
			
	$result = mysqli_query($this->Con,$sql);
	if ($result == true)
	{
		echo "Successfully added member<br />";
	}
	else
	{
		echo "Error Inserting member" . mysqli_error($this->Con) ." <br />";
	}
	
	$sql = "INSERT INTO member_interests (`Email`, `InterestID`)
			VALUES ('$EmailTextBox', '$IntCheckBox'); ";
	
	$result = mysqli_query($this->Con,$sql);
	if ($result == true)
	{
		echo "Successfully added member's interests<br />";
	}
	else
	{
		echo "Error Inserting member's interests" . mysqli_error($this->Con) ." <br />";
	}	
}
