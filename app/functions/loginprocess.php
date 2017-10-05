<?php

session_start();

$email = filter_has_var(INPUT_POST, 'email') ? $_POST['email']: null; //grabs the username from the request stream
$password  = filter_has_var(INPUT_POST, 'password') ? $_POST['password']: null;
//grabs the password from the request stream

	if(empty(trim($email))) { //checks to see if username is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter your email</p>\n
                              <a href='../../login.php'>Go Back</a>"; //errors variable array for error messages.
	}  elseif (strlen($email) < 6 OR strlen($email) > 30) {
                  //checks string length of username, if less than six characters or greater than 30, then send error to screen.
	           $errors[] = "Emails must include between 6 and 30 characters";
      }

	if(empty(trim($password))) {
            //checks to see if password is empty or if there is white space after what is entered, for validation.
		$errors[] = "<p>Please enter your password</p>\n
                              <a href='../../login.php'>Go Back</a>"; //errors variable array for error messages.
            //tells user to go back and enter password
	} elseif (strlen($password) < 1 OR strlen($password) > 30) {
            //checks string length of password, if less than six characters or greater than 30, then send error to screen.
	           $errors[] = "Passwords must include between 6 and 30 characters";
      }

	if (!empty($errors)) { //if the errors variable is empty
		foreach ($errors as $currentError) {
                  echo $currentError; //store message in variable and display on the screen
		}
	} else { //else execute login process

		$email = filter_var($email, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);
		$password = filter_var($password, FILTER_SANITIZE_STRING, 	FILTER_FLAG_NO_ENCODE_QUOTES);

		include '../db.conn.php';	// make db connection

		/* Query the users database table to get the password hash for the username entered by the user in the logon form */

		$sql = "SELECT password FROM user WHERE email = ?";

		$stmt = mysqli_prepare($conn, $sql);	// prepare the sql statement

		/* Bind the $username entered by the user to the prepared statement. Note the “s” part indicates the data type used – in this case a string */

		mysqli_stmt_bind_param($stmt, "s", $email);

		mysqli_stmt_execute($stmt);	// execute the query

		/* Get the password hash from the query results for the given username and store it in the variable indicated */

		mysqli_stmt_bind_result($stmt, $passwordHash);

		/* Check if a record was returned by the query. If yes, then there was a username matching what was entered in the logon form and we can now test to see if the password entered in the logon form is the same as the stored (correct) one in the database. */


		if (mysqli_stmt_fetch($stmt)) {
			if (password_verify($password, $passwordHash)) {
				header('Location: ../../index.php');
			}
		} else {
    			echo "<p>Sorry your email or password is incorrect. Please try again.</p> <a href='../../login.php'>Go Back</a>";
		}

		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
