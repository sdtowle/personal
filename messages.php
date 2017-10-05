<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cohort - Messages</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="home" data-role="page">
			<?php include 'header.php'; ?>
			<div class="messages-wrapper">
				<h1>Conversations</h1>
				<div class="conversation-wrapper">
					<div class="conversation">
						<img src="resources/assets/img/default-user.png" alt="Profile">
						<div class="conversation-user">
							<p>John Doe</p>
						</div>
						<i class="material-icons">more_horiz</i>
					</div>
					<div class="conversation">
						<img src="resources/assets/img/default-user.png" alt="Profile">
						<div class="conversation-user">
							<p>John Doe</p>
						</div>
						<i class="material-icons">more_horiz</i>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
