<!-- Header -->
<header class="contactP">
	<div class="container">
		<div class="slider-container">
			<div class="intro-text">
				<div class="intro-heading">Login</div>
			</div>
		</div>
	</div>
</header>

<?php
	if (!isset($_POST['submit'])) {
		echo '<section id="about" class="light-bg">';
		echo '<div class="container">';
		echo '<form id="mainForm" method="post" action="">';
		echo '<h2>Please enter your login information</h2>';
		
		// Error user exists
		if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "InvalidCreds"))
			echo '<h4 class="red">ERROR: Invalid username or password!</h4>';
		
		// Error Null SID
		if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "NullSid"))
			echo '<h4 class="red">ERROR: Null SID!</h4>';
		
		// Error Invalid SID
		if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "InvalidSid"))
			echo '<h4 class="red">ERROR: Invalid SID!</h4>';
				
		//////////////
		// USERNAME //
		//////////////
		echo '<div class="form-group margin-b-5">';
		echo '<label class="control-label" for="username">Create a username: </label>';
		echo '<input type="text" class="form-control form-mine" id="username" name="username" required />';
		echo '<div class="red" id="unFeedback">&emsp;</div>';
		echo '</div>';

		//////////////
		// PASSWORD //
		//////////////
		echo '<div class="form-group margin-b-5">';
		echo '<label class="control-label" for="password">Create a password</label>';
		echo '<input type="password" class="form-control form-mine" id="password" name="password" required />';
		echo '<div class="red" id="pwFeedback">&emsp;</div>';
		echo '</div>';

		////////////
		// SUBMIT //
		////////////
		echo '<button type="submit" value="SIGN UP!" name="submit" class="btn-mine">SUBMIT</button>';

		echo '</form>';

		echo '</div>';
		echo '</section>';
	}

if (isset($_POST['submit'])) {
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24";
	$dblink=db_connect("user_data");
	$password=hash('sha256', $salt.$passText.$username);
	$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
	$results=$dblink->query($sql) or
		die("Something went wrong with $sql<br>".$dblink->error);
	if ($results->num_rows>0) {
		$salt=microtime();
		$sid=hash('sha256', $salt.$password);
		$sql="Update `accounts` set `session_id`='$sid' where `auth_hash`='$password'";
		$dblink->query($sql) or
			die("Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=results&sid=$sid");
	} else {
		redirect("index.php?page=login&errMsg=InvalidCreds");
	}
}
?>
<script src="assets/js/log.js"></script>