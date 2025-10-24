<!DOCTYPE html>
<html>
<head>
	<title>HOH Person Details</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="HOH.css">	
	<script>
			function goToHome(){
			var home = window.location.replace("http://localhost/HOH_Home_Page.php");
		}
	</script>
</head>

<body>

	<?php
		include_once("HOH_Class.php");
		$myDB = new HOH("localhost","manager","hohManager","helpers_on_hand");
	?>	
		
	<div id='header2'>
	<img width='900px' src='heartHandsShort.jpg'>
	</div>
	
	<div id='bodyContent4'>
	<h3>NEW PERSON</h3>
	<form style='font-size: 18pt' action='HOH_ProcessPerson.php' method='POST' target='_self'>
	Person ID (4 digits):   <input type='text' name='Person_id'></br><hr>
	Background Check:   <input type='text' name='Background_check'></br>
	<label>Role(s):  </label>
	<input type='checkbox' name='Role_type' value='1'>Client   <input type='checkbox' name='Role_type' value='2'>Helper   <input type='checkbox' name='Role_type' value='3'>Manager</br><hr>
	First Name:  <input type='text' name='f_name'></br>
	Middle Initial:  <input type='text' name='m_int'></br>
	Last Name:  <input type='text' name='l_name'></br><hr>
	Address line 1:   <input type='text' name='A_street_line_1'></br> 
	Address line 2:  <input type='text' name='A_street_line_2'></br>  
	City:    <input type='text' name='A_city'></br>
	State:    <input type='text' name='A_state'></br>
	Zip code:  <input type='text' name='A_zip'></br><hr>
	Phone:   <input type='text' name='Phone'></br>
	Email:   <input type='text' name='Email'></br><hr>
	Special Notes:   <input type='text' name='Special_notes'></br><hr>

	<button id='submitButton' input type='submit'>SAVE</form></br></br>
	<center><button id='submitButton' onclick='goToHome();'>EXIT</center></br>
	</div>
	
</body>

</html>