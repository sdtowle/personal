<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Location Servicess - Cohort</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="register-container" data-role="page">
			<div class="header">
				<a href="landing.php"><i class="material-icons">arrow_back</i></a>
				<h1>Allowing Location Services</h1>
			</div>
			<div class="locations-wrapper">
				<h2>One last thing...</h2>
				<p>The Cohort application uses location services
					to personalise the experience for all of our users,
					retrieving all events and routes in your local area.
					<br>
					<br>
					By allowing location services you can make the
					most of the Cohort platform!</p>
					<img src="resources/assets/img/location.svg" alt="Location Icon">
					<div class="option-wrapper">
						<a href="welcome.php">ALLOW LOCATION SERVICES</a>
					</div>
					<div class="option-wrapper">
						<a href="#" class="dont-allow">DON'T ALLOW</a>
					</div>
			</div>
		</div>
	</body>
</html>
