<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Creating an Event - Cohort</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="register-container" data-role="page">
			<div class="header">
				<a href="create.php"><i class="material-icons">arrow_back</i></a>
				<h1>Creating an Event</h1>
			</div>
			<div class="register-stages-wrapper">
				<div class="progress-bar">
					<div class="progress one">
						<p>1</p>
					</div>
					<div class="progress-between one"></div>
					<div class="progress two">
						<p>2</p>
					</div>
					<div class="progress-between two"></div>
					<div class="progress three">
						<p>3</p>
					</div>
					<div class="progress-between two"></div>
					<div class="progress four">
						<p>4</p>
					</div>
				</div>
				<form class="create-event" action="app/functions/createprocess.php" method="post"> <!--form to process registration-->
					<div class="stage one"> <!--stage one of process, account details-->
						<h2>Event Details</h2>
						<input type="text" name="title" value="" placeholder="EVENT TITLE" maxlength="100">
						<div class="event-img">
							 <input type="file" class="event-image">
						</div>
						<input type="date" name="date" value="" placeholder="DATE">
						<input type="time" name="time" value="" placeholder="TIME">
						<input type="text" name="meeting" value="" placeholder="MEETING POINT" maxlength="250"><br>
						<input type="number" name="attendingNo" value="" placeholder="ANYONE" maxlength="4">
						<p></p>
						<div class="next-two">
							<i class="material-icons">keyboard_arrow_right</i>
						</div>
					</div>
					<div class="stage two" style="display: none;"> <!-- stage two, personal details for profile-->
						<h2>Event Route (Coming Soon)</h2>
						<p>Show other users the route you’re taking including start and end points!<br>
						<br>
						If you already have the route ready, great! Select the ‘Upload Route’ option. If not, don’t worry, we got you…Just select the ‘Map Route’ option and get mapping!</p>

						<div class="nav-buttons">
							<div class="prev-one">
								<i class="material-icons">keyboard_arrow_left</i>
							</div>

							<div class="next-three">
								<i class="material-icons">keyboard_arrow_right</i>
							</div>
						</div>
					</div>
					<div class="stage three" style="display: none;">
						<h1>Route Details</h1>
						<img src="resources/assets/img/distance.png" alt="Distance"> <input type="number" name="distance" value="" placeholder="DISTANCE" maxlength="4">
						<select class="unitofM" name="unitofM">
							<option value="km">KM</option>
							<option value="miles">Miles</option>
						</select><br>
						<i class="material-icons">timer</i><input type="number" name="duration" value="" placeholder="DURATION (HHMMSS)" maxlength="8">
						<select class="terrain" name="terrain">
							<option value="road">ROAD</option>
							<option value="trail">TRAIL</option>
							<option value="BOTH">BOTH</option>
						</select>

						<div class="skill-level-wrapper">
							<h2>Skill Level</h2>
							<div class="skill-level">
								<label>
									<input type="radio" name="skillLevel" value="1">
									<img src="resources/assets/img/beginner.png" alt="Beginner">
									Beginner
								</label>
								<label>
									<input type="radio" name="skillLevel" value="2">
									<img src="resources/assets/img/intermediate.png" alt="Intermediate">
									Intermediate
								</label>
								<label>
									<input type="radio" name="skillLevel" value="3">
									<img src="resources/assets/img/advanced.png" alt="Advanced">
									Advanced
								</label>
							</div>
						</div>
						<div class="nav-buttons">
							<div class="prev-two">
								<i class="material-icons">keyboard_arrow_left</i>
							</div>
							<div class="next-four">
								<i class="material-icons">keyboard_arrow_right</i>
							</div>
						</div>
					</div>
					<div class="stage four" style="display: none;">
						<h2>Description &amp; Create Event</h2>
						<p>Event Description (optional)</p>
						<textarea name="description" rows="8" cols="80" placeholder="Type Here..."></textarea>
						<div class="prev-three">
							<i class="material-icons">keyboard_arrow_left</i>
						</div>
						<input type="submit" name="create-event" value="Create My Event">
					</div>
				</form>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="./resources/assets/js/function.js"></script>
	</body>
</html>
