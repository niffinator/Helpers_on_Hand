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
	
	
	
	$result = mysqli_query($this->Con,$sql);
	if ($result == true)
	{
		echo "Successfully added chore<br />";
	}
	else
	{
		echo "Error Inserting member" . mysqli_error($this->Con) ." <br />";
	}
}
