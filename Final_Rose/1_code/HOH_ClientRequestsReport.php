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
		function updateStatus(){
			var home = window.location.replace("http://localhost/HOH_Home_Page.php");
		}
		
	</script>
</head>

<body>
		
	<div id='header2'>
	<img width='900px' src='heartHandsShort.jpg'>
	</div>
	
	<div id='bodyContent3'>
	<h3>Client Requests</h3>
	<center><table border='5px' style='font-size: 17pt'>
	<tr><td>Request #</td><td>Client ID</td><td>Chore Name</td><td>Submitted</td><td>Status</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	</table></center>
	<h3>Volunteer Calendar</h3>
	<center><table border='5px' style='font-size: 17pt'>
	<tr><td>Handraise ID</td><td>Volunteer Name</td><td>Chores Available to Complete</td><td>Day/ Time Availability</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	<tr><td>---</td><td>---</td><td>---</td><td>---</td></tr>
	</table></center>
	<h3>Intake Assignments</h3>
	<form style='font-size: 18pt' action='HOH_ProcessPerson.php' method='POST' target='_self'>
	<center><table border='5px' style='font-size: 17pt'>
	<tr><td>Transaction ID</td><td><input type='text' name='transactionid'></td><td>Helper ID 3</td><td><input type='text' name='helper3'></td></tr>
	<tr><td>Request ID</td><td><input type='text' name='requestid'></td><td>Assigned by</td><td><input type='text' name='managerid'></td></tr>
	<tr><td>Client ID</td><td><input type='text' name='clientid'></td><td>Scheduled Date</td><td><input type='text' name='schdate'></td></tr>
	<tr><td>Helper ID 1</td><td><input type='text' name='helper1'></td><td>Scheduled Time</td><td><input type='text' name='schtime'></td></tr>
	<tr><td>Helper ID 2</td><td><input type='text' name='helper2'></td><td>Status</td><td><input type='text' name='transtatusid'></td></tr>
	</table></center>
	</br>
	<center><button id='submitButton' style='background-color: red;' type='button' onclick='goToHome();'>EXIT</button>     <button id='submitButton' input type='submit'>SAVE</button></center></form>
	</div>

</body>

</html>