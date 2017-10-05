<?php

	//retreive each field input in to create event form
	$title = filter_has_var(INPUT_POST, 'title') ? $_POST['title']: null;
	$date = filter_has_var(INPUT_POST, 'date') ? $_POST['date']: null;
	$time = filter_has_var(INPUT_POST, 'time') ? $_POST['time']: null;
	$meeting = filter_has_var(INPUT_POST, 'meeting') ? $_POST['meeting']: null;
	$attendingNo = filter_has_var(INPUT_POST, 'attendingNo') ? $_POST['attendingNo']: null;
	$distance = filter_has_var(INPUT_POST, 'distance') ? $_POST['distance']: null;
	$unitofM = filter_has_var(INPUT_POST, 'unitofM') ? $_POST['unitofM']: null;
	$duration = filter_has_var(INPUT_POST, 'duration') ? $_POST['duration']: null;
	$terrain = filter_has_var(INPUT_POST, 'terrain') ? $_POST['terrain']: null;
	$skillLevel = filter_has_var(INPUT_POST, 'skillLevel') ? $_POST['skillLevel']: null;
	$description = filter_has_var(INPUT_POST, 'description') ? $_POST['description']: null;


	if(empty(trim($title))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter an event title!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if(empty(trim($date))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter an event start date!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if(empty(trim($time))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter an event start time!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if(empty(trim($meeting))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter a meeting point for the event!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if(empty(trim($distance))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter the distance of the route!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if(empty(trim($duration))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter the duration of the route!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if(empty(trim($skillLevel))) { //checks to see if field is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please select a skill level!</p>\n
					<a href='/create-event.php'>Go Back</a>"; //errors variable array for error messages.
	}
	if (!empty($errors)) { //if the errors variable is empty
		foreach ($errors as $currentError) {
			echo $currentError; //store field in variable and display on the screen
		}
	} else {

		$title = filter_var($title, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$date = filter_var($date, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$time = filter_var($time, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$meeting = filter_var($meeting, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$attendingNo = filter_var($attendingNo, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$distance = filter_var($distance, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$unitofM = filter_var($unitofM, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$duration = filter_var($duration, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$terrain = filter_var($terrain, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$skillLevel = filter_var($skillLevel, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$description = filter_var($description, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);

		include '../db.conn.php';	// make db connection

		$sqlCreate = "INSERT INTO event (hostID,routeID,title,eventDate,eventTime,meetingPoint,attending,distance,unitOfM,duration,terrain,skillLevel,description,location) VALUES (1,1,?,?,?,?,?,?,?,?,?,?,?,'newcastle')";


		$sqlCreateEvent = mysqli_prepare($conn, $sqlCreate);
		mysqli_stmt_bind_param($sqlCreateEvent,"ssssiisisis",$title,$date,$time,$meeting,$attendingNo,$distance,$unitofM,$duration,$terrain,$skillLevel,$description);
		mysqli_stmt_execute($sqlCreateEvent);
		mysqli_stmt_close($sqlCreateEvent);
		mysqli_close($conn);

		header('Location: ../../index.php');

	}
 ?>
