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
	<title>Competitions Overview</title>
	<meta http-equiv="content-type" content="text/html>"; charset="utf-8" />
	<link rel="stylesheet" href="style/mainStyle.css">
</head>
<body>

	<h1>Competitions Overview</h1>
	<div class="content_container">

		<!-- Navigation bar -->
		<ul class="navbar">
			<li class="navbar"><a href="addCompetition.php" class="current">Competition</a></li>
			<li class="navbar"><a href="addTeam.php">Teams</a></li>
			<li class="navbar"><a href="addUser.php">Users</a></li>
			<li class="navbar"><a href="logout.php">Logout</a></li>
		</ul>

		<?php echo $msg; ?>
		
		<!-- Form to add a compeition -->
		<form action="">
			<h2>New competition:</h2>
			<input type="text" name ="search" style="width:40%" placeholder="Unique competition name">
			<button type="submit" id="add" onclick="confirm('Are you sure you wish to add this competition?')">Add</button>
		</form>

		<br>
		<h2>Existing Competitions:</h2>
		<!-- List of Competitions -->
		<table style="width:50%">
			<tr>
				<th>Competition Name</th>
				<th>Active</th>
			</tr>
			<tr>
				<td><a href="competitionAdmin.php">Competition A</a></td>
				<td>No</td>
			</tr>
			<tr>
				<td><a href="competitionAdmin.php">Competition B</a></td>
				<td>No</td>
			</tr>
			<tr>
				<td><a href="competitionAdmin.php">Competition C</a></td>
				<td>No</td>
			</tr>
		</table>
	</div>
</body>

</html>