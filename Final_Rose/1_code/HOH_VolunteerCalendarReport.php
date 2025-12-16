<!DOCTYPE html>
<html>
<head>
	<title>HOH Reporting</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="HOH.css">	
	<script>
		function goToHome(){
			var home = window.location.replace("http://localhost/HOH_Home_Page.php");
		}
		
	</script>
</head>

<body>
		
	<div id='header2'>
	<img width='900px' src='heartHandsShort.jpg'>
	</div>
	
	<div id='bodyContent3'>
	<h3>Volunteer Calendar</h3>
	<center><table border='5px' style='font-size: 17pt'>
	<tr><td>Handraise ID</td><td>Volunteer Name</td><td>Chores Available to Complete</td><td>Day/ Time Availability</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	</table></center>
	</br>
	<center><button id='submitButton' onclick='goToHome();'>EXIT</center></br><center>
	</div>

</body>

</html>