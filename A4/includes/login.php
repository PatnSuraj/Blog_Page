<?php
	session_start();

	require_once "db.php";

	// implementing md5 hashed security token
	$_SESSION['token'] = sha1(session_id());

	// missed open parenthesis. Fixed the issue.
	// isntset does not exists. Fixed the issue.
	if (isset($_POST['submit-jedi-login'])) {
		$uname = trim(stripslashes(htmlspecialchars($_POST['l-uname'])));
		$pswd = trim(stripslashes(htmlspecialchars($_POST['l-pswd'])));

		$querySQL="SELECT * from `jedilogin` where `jedi_username`='{$uname}'";
		$result = $dbconnection->query($querySQL);
	
		if ($result->num_rows > 0) {
			// underscore missing in the statement below. Fixed the issue.
			session_regenerate_id(true); //create new session and delete old session

			$userRecord = $result->fetch_assoc();
			
			// Create session variable when session is active	
				$_SESSION['username'] = $userRecord['jedi_firstname'] . " " . $userRecord['jedi_lastname'];
				$_SESSION['user_id'] = $userRecord['jedi_id'];

			// password verification to verify the login credentials of user
			if (password_verify($pswd, $userRecord['jedi_password'])) {
				header("Location: ../index.php");
				die();
				
			// destroying the session if the hash values are invalid 
			} else {
				header("Location: ../jedi-login.php?hashinvalid=1");
				session_destroy();
			}
		}
		else {
			// If user is not found, redirect to login page with error info.
			header("Location: ../jedi-login.php?loginerror=1");
			die();
		}	
	}
	else {
		// If login info is not submitted but someone tries to access this file, 
		// redirect user to login page with error info.
		// semi-colon missing. Fixed the issue.
		header("Location: ../index.php?noaccess=1");
		die();
	}
?>

<!-- hidden form field with unique key stored in it -->
<input id="token" type="hidden" value="<?php echo $_SESSION['token']; ?>">