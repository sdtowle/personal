<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log in to Cohort</title>
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
				<h1>Log in to your Cohort Account</h1>
			</div>
			<div class="login-content">
				<p>Enter your registered Cohort
				<br>Email and Password</p>
				<form class="login" action="index.php" method="post">
					<input type="text" name="email" placeholder="Email" maxlength="50"><br>
					<input type="password" name="password" placeholder="Password"><br>
					<div>
						<input type="radio" name="remember" value="remember"><label>Keep Me Signed In</label>
					</div>
					<input type="submit" name="submit" value="LOG IN">
				</form>
				<a href="forgot.php">Forgot your password? <strong>Click Here</strong><br></a>
				<a href="register.php">Not registered with us? <strong>Create an Account</strong></a>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="./resources/assets/js/function.js"></script>
	</body>
</html>
