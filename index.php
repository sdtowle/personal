<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - Events</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
		<script type="text/javascript">
			window.onload = function() {
			  var startPos;
			  var geoSuccess = function(position) {
			    startPos = position;
			    document.getElementById('startLat').innerHTML = startPos.coords.latitude;
			    document.getElementById('startLon').innerHTML = startPos.coords.longitude;
			  };
			  navigator.geolocation.getCurrentPosition(geoSuccess);
			  console.log(geoSuccess);
			};
		</script>
	</head>
	<body id="home">
		<!--?php
			include 'app/db.conn.php';
 		?-->
		<div id="home" data-role="page">
			<?php include "header.php" ?> <!-- include external php file, no need to repeat code -->
			<!-- content -->
			<div data-role="content" id="events-wrapper" data-position-true>
				<div class="filter-wrapper">
					<div class="filter-wrapper-left">
						<p>Runs Located in:</p>
						<a href="#"><h3>Newcastle</h3></a> <!--will be changed dynamically depending on location-->
					</div>
					<div class="filter-wrapper-right">
						<i class="material-icons">filter_list</i>
					</div>
				</div>
				<!--?php
					$sql = "SELECT *
	   					    FROM event e
						    INNER JOIN host h
						    ON e.hostID = h.hostID
						    INNER JOIN user u
						    ON h.userID = u.userID
						    WHERE location = 'newcastle'";

							$sqlEvent = mysqli_query($conn, $sql) or die(mysqli_error($conn)); //makes a connection to the database, if not kills connection, displays error

							if (mysqli_num_rows($sqlEvent) > 0) {

								while ($row = mysqli_fetch_assoc($sqlEvent)) { //fetches information
									$eventID = htmlspecialchars($row["eventID"]); //places attributes in to rows to be displayed
									$title = htmlspecialchars($row["title"]);
									$distance = htmlspecialchars($row["distance"]);
									$unit = htmlspecialchars($row["unitOfM"]);
									$duration = htmlspecialchars($row["duration"]);
									$terrain = htmlspecialchars($row["terrain"]);
									$skillLevel = htmlspecialchars($row["skillLevel"]);
									$host = htmlspecialchars($row["hostID"]);
									$forename = htmlspecialchars($row["forename"]);
									$surname = htmlspecialchars($row["surname"]);

									echo "<div id=\"$eventID\" class=\"event\">\n";
									echo "\t<div class=\"event-left\">\n";
									echo "\t\t<img src=\"resources/assets/img/event-img-eg.jpg\" alt=\"Event Image\"; class=\"event-img\">\n";
									echo "\t</div>\n";
									echo "\t<div class=\"event-right\">\n";
									echo "\t\t<div class=\"event-right-top\">\n";
									echo "\t\t\t<a href=\"event-details.php\"><h4>$title</h4></a>\n";
									echo "\t\t</div>\n";
									echo "\t\t<div class=\"event-right-center\">\n";
									echo "\t\t\t<p>Host: <a href=\"profile.php\">$forename $surname</a></p>\n";
									echo "\t\t\t<div class=\"rating-wrapper\">\n";
									echo "\t\t\t\tratinggoeshere\n";
									echo "\t\t\t</div>\n";
									echo "\t\t</div>\n";
									echo "\t\t<div class=\"event-right-bottom\">\n";
									echo "\t\t\t<div class=\"event-details\">\n";
									echo "\t\t\t\t<img src=\"resources/assets/img/distance.png\" alt=\"Distance\">$distance $unit\n";
									echo "\t\t\t\t<i class=\"material-icons\">timer</i>$duration\n";
									echo "\t\t\t\t<img src=\"resources/assets/img/road.png\" alt=\"Terrain\">$terrain\n";
									echo "\t\t\t</div>\n";
									if ($skillLevel === "1") {
										echo "\t\t\t<img src=\"resources/assets/img/beginner.png\" alt=\"Beginner\">\n";
									} elseif ($skillLevel === "2") {
										echo "\t\t\t<img src=\"resources/assets/img/intermediate.png\" alt=\"Intermediate\">\n";
									} elseif ($skillLevel === "3") {
										echo "\t\t\t<img src=\"resources/assets/img/advanced.png\" alt=\"Advanced\">\n";
									}
									echo "\t\t</div>\n";
									echo "\t</div>\n";
									echo "</div>\n";
								}
							} else {
								echo "error";
							}

							mysqli_free_result($sqlEvent); //free's up space and kills connection
						    //mysqli_close($conn);
			    ?-->
				<div class="event">
					<div class="event-left">
						<img src="resources/assets/img/event-img-eg.jpg" alt="Event Image" class="event-img">
					</div>
					<div class="event-right">
						<div class="event-right-top">
							<a href="event-details.php"><h4>Running title</h4></a>
						</div>
						<div class="event-right-center">
							<p>Host: <a href="profile.php">John Doe</a></p>
							<div class="rating-wrapper">
								ratinggoeshere
							</div>
						</div>
						<div class="event-right-bottom">
							<div class="event-details">
								<img src="resources/assets/img/distance.png" alt="Terrain"> 5 KM
								<i class="material-icons">timer</i> 23 MIN
								<img src="resources/assets/img/road.png" alt="Terrain"> ROAD
							</div>
							<img src="resources/assets/img/beginner.png" alt="Skill Level">
						</div>
					</div>
				</div>
				<div class="event">
					<div class="event-left">
						<img src="resources/assets/img/event-img-eg.jpg" alt="Event Image" class="event-img">
					</div>
					<div class="event-right">
						<div class="event-right-top">
							<a href="event-details.php"><h4>Running title</h4></a>
						</div>
						<div class="event-right-center">
							<p>Host: <a href="profile.php">John Doe</a></p>
							<div class="rating-wrapper">
								ratinggoeshere
							</div>
						</div>
						<div class="event-right-bottom">
							<div class="event-details">
								<img src="resources/assets/img/distance.png" alt="Terrain"> 5 KM
								<i class="material-icons">timer</i> 23 MIN
								<img src="resources/assets/img/road.png" alt="Terrain"> ROAD
							</div>
							<img src="resources/assets/img/intermediate.png" alt="Skill Level">
						</div>
					</div>
				</div>
				<div class="event">
					<div class="event-left">
						<img src="resources/assets/img/event-img-eg.jpg" alt="Event Image" class="event-img">
					</div>
					<div class="event-right">
						<div class="event-right-top">
							<a href="event-details.php"><h4>Running title</h4></a>
						</div>
						<div class="event-right-center">
							<p>Host: <a href="profile.php">John Doe</a></p>
							<div class="rating-wrapper">
								ratinggoeshere
							</div>
						</div>
						<div class="event-right-bottom">
							<div class="event-details">
								<img src="resources/assets/img/distance.png" alt="Terrain"> 5 KM
								<i class="material-icons">timer</i> 23 MIN
								<img src="resources/assets/img/road.png" alt="Terrain"> ROAD
							</div>
							<img src="resources/assets/img/advanced.png" alt="Skill Level">
						</div>
					</div>
				</div>
			</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="./resources/assets/js/function.js"></script>
	</body>
</html>
