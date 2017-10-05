<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="home" data-role="page">
			<?php include "header.php" ?>
			<div class="profile-wrapper">
				<div class="back-to-home">
					<a href="routes.php"><i class="material-icons">arrow_back</i><p>Back to Home</p></a>
				</div>
				<div class="user-details">
					<div class="user-details-left">
						<img src="resources/assets/img/default-user.png" alt="Profile Picture">
					</div>
					<div class="user-details-right">
						<div class="profile-username">
							<h1>John Doe</h1>
						</div>
						<div class="profile-rating">
							<p>ratinggoeshere</p>
							<img src="resources/assets/img/beginner.png" alt="Skill Level">
						</div>
					</div>
				</div>
				<a href="messages.php" class="send">Send a Message</a>
				<div class="profile-about">
					<h2>About Me</h2>
					<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
				<div class="events-hosted">
					<h2>Events Hosted by John</h2>
				</div>
			</div>
		</div>
	</body>
</html>
