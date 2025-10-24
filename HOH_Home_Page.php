<!DOCTYPE html>
<html>
<head>
	<title>Helpers on Hand</title>
	<meta name="keywords" content="Handyman, Domestic Helper, Task Rabbit, DIY Assistant">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="HOH.css">	
	<script>
		function goToLogin(){
			var login = window.location.replace("http://localhost/HOH_Login_Page.php");
		}
		function goToHome(){
			var home = window.location.replace("http://localhost/HOH_Home_Page.php");
		}
		function goToDataEntry(){
			var home = window.location.replace("http://localhost/HOH_Data_Entry.php");
		}		
			
	</script>
</head>

<body>
		
	<div id='header1'>
	<img width='900px' src='heartHandsTall.jpg'>
	</div>
	
	<div id='bodyContent1'>		
	<h1 align='center'>Helpers on Hand</h1>		
	<center><button id='loginButton' onclick='goToLogin();'>Existing Users: Login</center></br>
	<center><button id='loginButton' onclick='goToDataEntry()';>Managers: Data Entry</center></br>
	<center><button id='loginButton'>Learn More About Us</center></br>
	</div>
	
</body>

</html>