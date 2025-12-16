<!DOCTYPE html>
<html>
<head>
	<title>HOH Chore Details</title>
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
		
	<div id='header2'>
	<img width='900px' src='heartHandsShort.jpg'>
	</div>
	
	<div id='bodyContent2'>
	<h3>NEW CHORE</h3>
	<form style='font-size: 18pt' action='HOH_ProcessChore.php' method='POST' target='_self'>
	<center><table>
	<tr><td>Chore ID:   </td><td><input type='text' name='choreid'></td></tr> 
	<tr><td>Chore Name:  </td><td><input type='text' name='chorename'></td></tr>  
	<tr><td>Chore Description:    </td><td><input type='text' name='choredesc'></td></tr>
	<tr><td>Number of Staff Required:    </td><td><input type='text' name='noofstaff'></td></tr></table></center>
	<hr>
	<center><button id='submitButton' input type='submit'>SAVE</button>     <button id='submitButton' type='button' onclick='goToHome();'>EXIT</button></center></form>
	</div>
	
</body>

</html>