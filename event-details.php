<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - EVENT NAME GOES HERE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="home" data-role="page">
			<?php include "header.php" ?>
			<div class="event-details-wrapper">
				<div class="back-to-home">
					<a href="index.php"><i class="material-icons">arrow_back</i><p>Back to Home</p></a>
				</div>
				<div class="details-content">
					<div class="details-top-content">
						<h2>Running Title</h2>
						<div class="details-top-host">
							<p>Host: <a href="profile.php">John Doe</a></p> <p>ratinggoeshere</p>
						</div>
						<div class="details-top-host">
							<p><strong>Date:</strong> 21/01/2001</p> <p><strong>Time:</strong> 17:30</p>
						</div>
					</div>
					<img src="resources/assets/img/route.png" alt="Event Route">
					<div class="route-details-wrapper">
						<img src="resources/assets/img/distance.png" alt="Distance"> 5 KM
						<i class="material-icons">timer</i> 23 MIN
						<img src="resources/assets/img/road.png" alt="Terrain"> ROAD
						<img src="resources/assets/img/beginner.png" alt="Skill Level">
					</div>
					<a href="#more-event-info"><div class="more-info">
						<p>More Info</p>
						<i class="material-icons">keyboard_arrow_down</i>
					</div></a>
				</div>
			</div>
			<div id="more-event-info">
				<div class="attending">
					<p>3 people are attending, 5 people have bookmarked this event!</p>
					<div class="option-wrapper">
						<a href="#" class="attending">LET'S GO!</a>
					</div>
				</div>
				<div class="description">
					<h3>Description</h3>
					<p>Donec sed odio dui. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur.</p>
				</div>
				<div class="comment-section">
					<h3>Comments</h3>
					<p>Any questions for the host about the event?<br>Fire away.</p>
					<form class="send-comment" action="commentprocess.php" method="post">
						<textarea class="message-box" name="message" cols="40" rows="5" placeholder="Type a message..."></textarea>
						<input type="submit" name="send" value="">
					</form>
					<div class="comment">
						<div class="comment-top">
							<img src="resources/assets/img/default-user.png" alt="Profile">
							<a href="profile.php"><h4>John Doe</h4></a>
							<p>01/01/01 01:01:01</p>
						</div>
						<p>Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.</p>
					</div>
					<div class="comment">
						<div class="comment-top">
							<img src="resources/assets/img/default-user.png" alt="Profile">
							<a href="profile.php"><h4>John Doe</h4></a>
							<p>01/01/01 01:01:01</p>
						</div>
						<p>Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.</p>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="./resources/assets/js/function.js"></script>
	</body>
</html>
