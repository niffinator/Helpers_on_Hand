<!DOCTYPE html>
<html>
<head>
	<title>HOH Data Entry</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="HOH.css">	
	<script>
		function goToHome(){
			var home = window.location.replace("http://localhost/HOH_Home_Page.php");
		}
		function goToPersonForm(){
			var personForm = window.location.replace("http://localhost/HOH_Person_Form.php");
		}
		function goToChoreForm(){
			var personForm = window.location.replace("http://localhost/HOH_Chore_Form.php");
		}		
	</script>
</head>

<body>
		
	<div id='header2'>
	<img width='900px' src='heartHandsShort.jpg'>
	</div>
	
	<div id='bodyContent3'>
	<h3>PERSON</h3>
	<center><form>
	
	</form></center>
	<center><button id='submitButton' onclick='goToPersonForm();'>ADD NEW</center></br><center>
	<center><button id='submitButton' onclick='goToHome();'>DISPLAY ALL</center></br><center>	
	</div>
	
	<div id='bodyContent3'>
	<h3>CHORES</h3>
	<center><form>
	
	</form></center>
	<center><button id='submitButton' onclick='goToChoreForm();'>ADD NEW</center></br><center>
	<center><button id='submitButton' onclick='goToHome();'>DISPLAY ALL</center></br><center>	
	</div>

</body>

</html>