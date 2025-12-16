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
	
	<div id='bodyContent4'style='height: 900px'>
	<h3>NEW PERSON</h3>
	<form style='font-size: 18pt' action='HOH_ProcessPerson.php' method='POST' target='_self'>
	<center><table>
	<tr><td>Person ID (4 digits):   </td><td><input type='text' name='personid'></td></tr>
	<tr><td>User Name:  </td><td><input type='text' name='username'></td></tr>
	<tr><td>Password:  </td><td><input type='text' name='password'></td></tr></table></center>
	<hr>
	<center><table>
	<tr><td>Background Check:   </td><td><input type='text' name='background'></td></tr>
	<tr><td><label>Role(s):</label></td><td><input type='checkbox' name='role' value='1'>Client   
	<input type='checkbox' name='role' value='2'>Helper   
	<input type='checkbox' name='role' value='3'>Manager</td></tr></table></center>
	<hr>
	<center><table>
	<tr><td>First Name:  </td><td><input type='text' name='fname'></td></tr>
	<tr><td>Middle Initial:  </td><td><input type='text' name='midname'></td></tr>
	<tr><td>Last Name:  </td><td><input type='text' name='lname'></td></tr></table></center>
	<hr>
	<center><table>
	<tr><td>Address line 1:   </td><td><input type='text' name='address1'></td></tr> 
	<tr><td>Address line 2:  </td><td><input type='text' name='address2'></td></tr>  
	<tr><td>City:    </td><td><input type='text' name='city'></td></tr>
	<tr><td>State:    </td><td><input type='text' name='state'></td></tr>
	<tr><td>Zip code:  </td><td><input type='text' name='zip'></td></tr></table></center>
	<hr>
	<center><table>
	<tr><td>Phone:   </td><td><input type='text' name='phone'></td></tr>
	<tr><td>Email:   </td><td><input type='text' name='email'></td></tr></table></center>
	<hr>
	<center><table>
	<tr><td>Special Notes:   </td><td><input type='text' name='notes'></td></tr></table></center>
	<hr>
	<center><button id='submitButton' input type='submit'>SAVE</button>     <button id='submitButton' type='button' onclick='goToHome();'>EXIT</button></center></form>
	</div>
	
</body>

</html>