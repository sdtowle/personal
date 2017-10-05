<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - Account</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="home" data-role="page">
			<?php include 'header.php'; ?>
			<div class="account-wrapper">
				<h1>My Account</h1>
				<p>View your profile, events and settings!</p>
				<div class="account-settings">
					<a href="profile.php"><div class="settings-option-wrapper">
						<p>View your Profile</p>
						<i class="material-icons">arrow_back</i>
					</div></a>
					<a href="attending.php"><div class="settings-option-wrapper">
						<p>Attending Events</p>
						<i class="material-icons">arrow_back</i>
					</div></a>
				</div>
				<h2>System Settings</h2>
				<div class="system-settings">
					<a href="account-settings.php"><div class="settings-option-wrapper">
						<p>Account Settings</p>
						<i class="material-icons">arrow_back</i>
					</div></a>
					<a href="system-settings"><div class="settings-option-wrapper">
						<p>System Settings</p>
						<i class="material-icons">arrow_back</i>
					</div></a>
					<a href="terms.php"><div class="settings-option-wrapper">
						<p>Terms &amp; Conditions</p>
						<i class="material-icons">arrow_back</i>
					</div></a>
					<a href="privacy.php"><div class="settings-option-wrapper">
						<p>Privacy Policy</p>
						<i class="material-icons">arrow_back</i>
					</div></a>
				</div>
				<a href="landing.php" class="signout">Sign out of Cohort</a>
			</div>
		</div>
	</body>
</html>
