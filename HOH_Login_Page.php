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
		<center><table>
		<th><tr><td id='formLabel'>User Name:</td><td></td><td id='formField' input type='text'></td></tr></th>
		<tr><td id='formLabel'>Password:</td><td></td><td id='formField' input type='password'></td></tr>
		</table></center></br></br></br>
		<center><button id='submitButton' onclick='goToHome();'>SUBMIT</center></br><center>
		</div>

	</div>
	
</body>

</html>