<!DOCTYPE html>
<html>
<head>
	<title>HOH Login</title>
	<meta name="keywords" content="Handyman, Domestic Helper, Task Rabbit, DIY Assistant">
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
	
	?>

	<div class='container'>
		
		<div id='header2'>
		<img width='900px' src='heartHandsShort.jpg'>
		</div>
	
		<div id='bodyContent2'>
		<h1>Helpers on Hand Login Page</h1>		
		<form style='font-size: 18pt' action='HOH_ProcessLogin.php' method='POST' target='_self'>
		<center><table>
		<tr><td>User Name:   </td><td><input type='text' name='username'></td></tr>
		<tr><td>Password:   </td><td><input type='password' name='password'></td></tr>
		<tr><td><label>Role:</label></td><td><input type='radio' name='Role_type' value='1'>Client
											<input type='radio' name='Role_type' value='2'>Helper
											<input type='radio' name='Role_type' value='3'>Manager</td></tr></table></center>
		<hr>
		<center><button id='submitButton' input type='submit'>SUBMIT</button>     <button id='submitButton' type='button' onclick='goToHome();'>EXIT</button></center></form>
		</div>

	</div>
	
</body>

</html>