<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Email Register - Cohort</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Links to external Librarys such as JQuery movile, material icons and CSS -->
		<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="resources/assets/css/app.css">
	</head>
	<body>
		<div id="register-container" data-role="page">
			<div class="header">
				<a href="register.php"><i class="material-icons">arrow_back</i></a>
				<h1>Create a Cohort Account</h1>
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
				</div>
				<form class="register" action="app/functions/registerprocess.php" method="post"> <!--form to process registration-->
					<div class="stage one"> <!--stage one of process, account details-->
						<h2>Firstly, Account Details...<br>(These will get you logged in)</h2>
						<input type="text" name="email" value="" placeholder="Email">
						<p>e.g. example@example.com</p>
						<input type="password" name="password" value="" placeholder="Password">
						<input type="password" name="passwordVerify" value="" placeholder="Repeat Password">
						<p>Minimum 8 Characters</p>
						<div class="next-two">
							<i class="material-icons">keyboard_arrow_right</i>
						</div>
					</div>
					<div class="stage two" style="display: none;"> <!-- stage two, personal details for profile-->
						<h2>Now let's talk about you...</h2>
						<input type="text" name="forename" value="" placeholder="Forename">
						<input type="text" name="surname" value="" placeholder="Surname">
						<input type="date" name="dob" value="" placeholder="DOB:">

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
						<h1>Skill Levels</h1>
						<p>Skill levels help you choose the right running event
							to best suit you, ranging from Beginner, Intermediate
							and Advanced. These icons can be found across the
							Cohort platform to indicate the difficulty of the event. </p>
						<div class="skill-level-wrapper">
							<p>Select your Skill Level:</p>
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

							<input type="submit" name="create" value="Create My Account">
						</div>
					</div>
				</form>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="./resources/assets/js/function.js"></script>
	</body>
</html>
