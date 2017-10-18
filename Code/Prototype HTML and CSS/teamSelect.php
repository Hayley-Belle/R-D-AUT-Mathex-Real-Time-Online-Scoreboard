<?php
	session_start();
	if (!$_SESSION['valid'] || $_SESSION['privilege'] != 'Marker'){
		header("Location: invalidLogin.html");
	} else {
		$msg = "Logged in as: " . $_SESSION['fullname'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Selection</title>
	<meta http-equiv="content-type" content="text/html>"; charset="utf-8" />
	<link rel="stylesheet" href="style/mainStyle.css">
</head>
<body>

	<h1> Select Team </h1>
	<div class="content_container">

		<!-- Navigation bar -->
		<ul class="navbar">
			<!-- Navigation bar -->
			<li class="navbar"><a href="teamSelect.php" class="current">Select Team</a></li>
			<li class="navbar"><a href="marker.php">Team A</a></li>
			<li class="navbar"><a href="marker.php">Team B</a></li>
			<li class="navbar"><a href="logout.php">Logout</a></li>
		</ul>

		<?php echo $msg; ?>
		
		<!-- Form to search teams or select from drop-down list -->
		<form action="">
			<h2>Search for the team you wish to mark here:</h2>
			<input list="teams" name="teamForm">
			<datalist id="teams">
				<option value="Team A"/>
				<option value="Team B"/>
				<option value="Team C"/>
				<option value="Team D"/>
				<option value="Team E"/>
			</datalist>
			<input type="submit" onclick="confirm('Are you sure you wish to mark this team?')">
		</form>

		<br>
		<br>
		Team A: Auckland Grammar School
		<br>
		<button id="remove" onclick="confirm('Are you sure you wish to unassign this team?')">Unassign Team</button>
		<br>
		Team B: Panmure Distruct School
		<br>
		<button id="remove" onclick="confirm('Are you sure you wish to unassign this team?')">Unassign Team</button>
	</div>
</body>
</html>