<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - Routes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="home" data-role="page">
			<?php include 'header.php'; ?>
			<div class="details-wrapper">
				<div class="back-to-home">
					<a href="routes.php"><i class="material-icons">arrow_back</i><p>Back to Home</p></a>
				</div>
				<div class="route-details-content">
					<div class="route-host">
						<p>Route Created By: <a href="profile.php">John Doe</a></p>
						<p>ratingsgohere</p>
					</div>
					<img src="resources/assets/img/route.png" alt="Event Route">
					<div class="route-details-wrapper">
						<img src="resources/assets/img/distance.png" alt="Terrain"> 5 KM
						<i class="material-icons">timer</i> 23 MIN
						<img src="resources/assets/img/road.png" alt="Terrain"> ROAD
						<img src="resources/assets/img/beginner.png" alt="Skill Level">
					</div>
					<a href="create-from-route.php" class="create-from-route">CREATE EVENT FROM ROUTE</a>
				</div>
			</div>
		</div>
	</body>
</html>
