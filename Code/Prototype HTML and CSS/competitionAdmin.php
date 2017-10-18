<?php
	session_start();
	if (!$_SESSION['valid'] || $_SESSION['privilege'] != 'Admin'){
		header("Location: invalidLogin.html");
	} else {
		$msg = "Logged in as: " . $_SESSION['fullname'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Competition</title>
	<meta http-equiv="content-type" content="text/html>"; charset="utf-8" />
	<link rel="stylesheet" href="style/mainStyle.css">
</head>
<body>

	<h1>Edit Competition</h1>
	<div class="content_container">

		<!-- Navigation bar -->
		<ul class="navbar">
			<li class="navbar"><a href="addCompetition.php" class="current">Competition</a></li>
			<li class="navbar"><a href="addTeam.php">Teams</a></li>
			<li class="navbar"><a href="addUser.php">Users</a></li>
			<li class="navbar"><a href="logout.php">Logout</a></li>
		</ul>

		<?php echo $msg; ?>
		
		<h2>Competition A Status: INACTIVE</h2>

		<!-- Start competition or remove it from the system-->
		<button id="start" onclick="confirm('Are you sure you wish to start this competition?')">Start</button>
		<button id="remove" onclick="confirm('Are you sure you wish to delete this competition?')">Delete Competition</button>

		<br>
		<h2>Current Teams: </h2>
		<!-- List of Teams in the selected competition -->
		<table style="width:35%">
			<tr>
				<th>Team Name</th>
				<th>Team Initials</th>
				<th>Remove</th>
			</tr>
			<tr>
				<td>Team A</td>
				<td>ABC</td>
				<td><button id="remove" onclick="confirm('Are you sure you wish to remove this team from the competition?')">Remove</button></td>
			</tr>
			<tr>
				<td>Team B</td>
				<td>BCD</td>
				<td><button id="remove" onclick="confirm('Are you sure you wish to remove this team from the competition?')">Remove</button></td>
			</tr>
			<tr>
				<td>Team C</td>
				<td>CDE</td>
				<td><button id="remove" onclick="confirm('Are you sure you wish to remove this team from the competition?')">Remove</button></td>
			</tr>
		</table>

		<form action="">
			<h2>Search for the team you wish to add here:</h2>
			<input list="teams" name="teamForm">
			<datalist id="teams">
				<option value="Team A"/>
				<option value="Team B"/>
				<option value="Team C"/>
				<option value="Team D"/>
				<option value="Team E"/>
			</datalist>
			<input type="submit" id="select" onclick="confirm('Are you sure you wish to add this team to the competition?'))">
		</form>
	</div>
</body>
</html>