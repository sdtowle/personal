<?php
$email = filter_has_var(INPUT_POST, 'email') ? $_POST['email']: null;
$password = filter_has_var(INPUT_POST, 'password') ? $_POST['password']: null;
$forename = filter_has_var(INPUT_POST, 'forename') ? $_POST['forename']: null;
$surname = filter_has_var(INPUT_POST, 'surname') ? $_POST['surname']: null;
$dob = filter_has_var(INPUT_POST, 'dob') ? $_POST['dob']: null;
$skillLevel = filter_has_var(INPUT_POST, 'skillLevel') ? $_POST['skillLevel']: null;
$errors = array();

	if(empty(trim($email))) {
		$errors[] = "<p>Please enter an email address</p>\n";
	}

	if(empty(trim($password))) {
		$errors[] = "<p>Please enter a password</p>\n";
	}

	if(empty(trim($forename))) {
		$errors[] = "<p>Please enter your forename</p>\n";
	}

	if(empty(trim($surname))) {
		$errors[] = "<p>Please enter your surnamel</p>\n";
	}

	if(empty(trim($dob))) {
		$errors[] = "<p>Please enter your date of birth!</p>\n";
	}

	if(empty(trim($skillLevel))) {
		$errors[] = "<p>Please select a skill level!</p>\n";
	}

	if (!empty($errors)) {
		foreach ($errors as $currentError) {
			echo $currentError;
		}
	} else {

		include '../db.conn.php';	// make db connection

		$passwordHash = password_hash($password, PASSWORD_BCRYPT);

		$sqlRegister = "INSERT INTO user (email, password, forename, surname, dob, skillLevel) VALUES (?, ?, ?, ?, ?, ?)";

		$sqlProcess = mysqli_prepare($conn, $sqlRegister);
		mysqli_stmt_bind_param($sqlProcess,"sssssi", $email, $passwordHash, $forename, $surname, $dob, $skillLevel);
		mysqli_stmt_execute($sqlProcess);
		mysqli_stmt_close($sqlProcess);
		mysqli_close($conn);

		header('Location: ../../location-access.php');

	}
