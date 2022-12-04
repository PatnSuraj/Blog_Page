<?php
	session_start();
?>
<?php
	/*
	* CSCI 2170: ONLINE EDITION, WINTER 2021
	* STARTER CODE FOR ASSIGNMENT 4
	* 
	* This code was developed by Dr. Raghav V. Sampangi (raghav@cs.dal.ca)
	*
	* Website login page
	*/

	require_once "includes/header.php";
	require_once "includes/db.php";

?>
	
	
		<main id="pg-main-content">
			<div class="py-5 text-center container">
				<div class="row">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h1 class="fw-light">Jedi Blog</h1>
						<p class="lead text-muted">Your one stop shop for all Jedi knowledge.</p>
						<p class="lead text-muted">Sith, keep away!</p>
					</div>
				</div>
			</div>

			<!-- referred the alert messages -->
			<!-- If the registration was successful, it redirects to the login page by showing the success registration message -->
			<?php
				if (isset($_GET['registration-success'])) {
			?>

				<div class="text-center">
					<p class="lead text-primary">Registration Success. Sign in with your username and password to create blogs!</p>
				</div>
			<?php
			}
			?>
			<!-- checks and displays error message if the hash verification is invalid -->
			<?php
				if (isset($_GET['hashinvalid'])) {
			?>

				<div class="text-center">
					<p class="lead text-danger">Hash value did not match. Please try again with correct password.</p>
				</div>
			<?php
			}
			?>

			<!-- If the username or password is not found, mismatch error will be displayed -->
			<?php
				if (isset($_GET['loginerror'])) {
			?>

				<div class="text-center">
					<p class="lead text-danger">Username or Password doesn't match.</p>
				</div>
			<?php
			}
			?>

			<div class="py-5 text-center container">
				<div class="row">
					<div class="col-lg-6 col-md-8 mx-auto">
					<form class="form-signin" method="post" action="includes/login.php">
						<!-- Bootstrap Login form used from example on getbootstrap.com,
							available here: https://getbootstrap.com/docs/4.0/examples/sign-in/
						-->
						<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
						<input type="text" name="l-uname" id="input-uname" class="form-control" placeholder="Username" required autofocus>
						<br>
						<input type="password" name="l-pswd" id="input-password" class="form-control" placeholder="Password" required>
						<br>
						<input type="submit" name="submit-jedi-login" class="btn btn-lg btn-primary btn-block" value="Sign in">
					</form>
					</div>
				</div>
			</div>



		</main>

<?php
	require_once "includes/footer.php";
?>