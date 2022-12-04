<?php
	session_start();
	require_once "includes/header.php";
?>

<link rel="stylesheet" href="css/style.css">
<main id="pg-main-content">

	<!-- header part referred from the homepage implemented by professor Raghav Sampangi. Accessed on 8th April 2021 -->
			<div class="py-5 text-center container">
				<div class="row">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h1 class="fw-light">Jedi Blog</h1>
						<p class="lead text-muted">Your one stop shop for all Jedi knowledge.</p>
						<p class="lead text-muted">Sith, keep away!</p>
					</div>
				</div>
			</div>


			<div class="content">
				<div class="heading"> 
					<h2>Create blogs and explore more by registering here</h2>
				</div>

				<!-- 	1. Referred the lecture notes of week 10 Available at CSCI 2170 content module 
						Week 10. Accessed on 7th April 2021 
						2. Refrence for regex pattern Available at: https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength. 
						Accessed on April 9th, 2021 
				-->
				<div class="form-inline">

					<!-- text boxes for the user input data -->
					<form action="process-register.php" method="post">
						<label>First name:</label>
						<input type="text" name="f-name" id="input-fname" placeholder="Firstname" required autofocus>

						<label>Last name:</label>
						<input type="text" name="l-name" id="input-lname" placeholder="Lastname" required autofocus>
		
						<label>User name:</label>
						<input class="form-input" type="text" name="u-name" id="uname-input" placeholder="Username" required autofocus>

						<label>Email:</label>
						<input class="form-input" type="email" name="email-address" id="email-input" pattern="[a-z0-9]+[\.a-z0-9]*@theforce.org" placeholder="only @theforce.org domains accepted" required autofocus>


						<!-- Requirements for the password implementation -->
						<div class="password-info" style="text-align: center; color: green;">
							<p><li>Password should have 2 upper case letters</li>
							   <li>It should have atleast 2 words seperated by space or "," or "-"</li> 
							   <li>Two words should not be same</li> 
							   <li>It should have 2 special characters</li>
							   <li>It should have 2 digits</li></p>
						</div>
						
						<label>Password:</label>
						<!-- pattern implemented in the requirement as per the instructions given -->
						<input class="form-input" type="password" name="pswd" id="password-input" pattern="(?=(.*[A-Z]){2,})(?=(.*[ |,|-]))(?=(.*[^\w\d\s]){2,})((?=(.*[\d]){2,})).{6,}$" placeholder = "Passcode" required autofocus>
						
						<button type="submit" name="registration-box" value = "Register">Register</button>
					</form>
				</div>
</main>
<?php
	require_once "includes/footer.php";
?>
