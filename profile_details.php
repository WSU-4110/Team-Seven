<link href="humdrum.css" rel="stylesheet" type="text/css" media="screen" />
<div class= "page">

	<div class= "padd">

		<!-- Profile Picture -->
		<div class= "padd">
		<img src="images/ProfileTest.jpg" alt="Profile Picture." width="128" height="128">
		</div>
		
		<!-- Current User's Name -->
		<div class= "padd">
			<h1>John Doe</h1>
			<!-- ** follow button in progress - Not functional yet! ** -->
			<img src="images/follow.jpg" alt="follow button">
		</div>
		
	</div>
	
	<br>
	
	<!-- Information -->
	<div class= "box_drawn">
	
	<h2>Stats:</h2><br>
		Join date: 8/30/2025<br>
		Posts: 12<br>
		
	</div>
	
	<br>
	
	<!-- Bio -->
	<div class= "box_drawn">
	
	<h2>Bio:</h2><br>
		Just a Wayne State computer scientist.
		
	</div>
	
	<br>
	
	<!-- Reccomendations -->
	<div class= "box_drawn">
	
	<h2>Music Reccomendations:</h2><br>
		MUSIC LINKS
		
	</div>
	
	<div class= "box_drawn">
	
	<h2>Followers</h2><br>
	<?php
	include "db_connect.php";
	$sql = "SELECT followers FROM user_follow";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br>" . $row["followers"]. "<br>";
		}
	} else {
		echo "This user has no followers";
	}
	$mysqli->close();
	
	?>
		
	</div>
	
	<div class= "box_drawn">
	
	<h2>Following</h2><br>
	<?php
	include "db_connect.php";
	$sql = "SELECT following FROM user_follow";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<br>" . $row["following"]. "<br>";
		}
	} else {
		echo "This user is not following anyone";
	}
	$mysqli->close();
	
	
	?>
		
		
	</div>


</div>