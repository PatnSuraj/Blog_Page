<?php
	session_start();

		require_once "includes/db.php";

		// Getting the input from user, sanitizing the input data and inserting the statements into the database
		if(isset($_POST['registration-box'])) {
			$firstName = trim(stripslashes(htmlspecialchars($_POST['f-name'])));
			$lastName = trim(stripslashes(htmlspecialchars($_POST['l-name'])));
			$userNames = trim(stripslashes(htmlspecialchars($_POST['u-name'])));
			$passcode = trim(stripslashes(htmlspecialchars($_POST['pswd'])));

			// hashing the password given by user after sanitizing the input
			$hashed_password = password_hash($passcode, PASSWORD_DEFAULT);
			$email = trim(stripslashes(htmlspecialchars($_POST['email-address'])));
			
			// Inserts the user given data in jedilogin table and uses the data while verifying the login details with hashed password.
			$query = "INSERT INTO `jedilogin` (`jedi_id`, `jedi_username`, `jedi_password`, `jedi_firstname`, `jedi_lastname`, `jedi_email`) VALUES (NULL,'$userNames','$hashed_password','$firstName','$lastName','$email')";
			$result = $dbconnection->query($query);

			// url changes if it is success by redirecting to jedi-login page
			if ($result) {
				header("Location: jedi-login.php?registration-success");
				die();
			}
		}
?>




