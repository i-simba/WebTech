<!-- Header -->
<header class="contactP">
	<div class="container">
		<div class="slider-container">
			<div class="intro-text">
				<div class="intro-heading">Register</div>
			</div>
		</div>
	</div>
</header>

<?php
echo '<section id="about" class="light-bg">';
echo '<div class="container">';

if (!isset($_POST['submit'])) {
	echo '<form id="mainForm" method="post" action="">';
	echo '<h2>Register</h2>';
	
	// Error user exists
	if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "userExists"))
		echo '<h4 class="red">ERROR: User already exists!</h4>';
	
	//////////////
	// USERNAME //
	//////////////
	if ($_SESSION['username'])
		echo '<div class="form-group margin-b-5 has-success">';
	else
		echo '<div class="form-group margin-b-5">';
	echo '<label class="control-label" for="username">Create a username: </label>';
	// Keep Valid Input
	if ($_SESSION['username'])
		echo '<input type="text" class="form-control form-mine" id="username" name="username" value="'.$_SESSION['username'].'" required />';
	else
		echo '<input type="text" class="form-control form-mine" id="username" name="username" required />';
	echo '<div class="red" id="unFeedback">&emsp;</div>';
	echo '</div>';
	
	//////////////
	// PASSWORD //
	//////////////
	if (isset($_SESSION['password']))
		echo '<div class="form-group margin-b-5 has-success">';
	else
		echo '<div class="form-group margin-b-5">';
	echo '<label class="control-label" for="password">Create a password</label>';
	// Keep Valid Input
	if (isset($_SESSION['password']))
		echo '<input type="password" class="form-control form-mine" id="password" name="password" value="'.$_SESSION['password'].'" required />';
	else
		echo '<input type="password" class="form-control form-mine" id="password" name="password" required />';
	echo '<div class="red" id="pwFeedback">&emsp;</div>';
	echo '</div>';
	
	////////////
	// SUBMIT //
	////////////
	echo '<button type="submit" value="SIGN UP!" name="submit" class="btn-mine">SUBMIT</button>';
	
	echo '</form>';
}

if (isset($_POST['submit'])) {
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24";
	$dblink=db_connect("user_data");
	$password=hash('sha256', $salt.$passText.$username);
	
	// Check if user exists
	$sql="Select `auto_id` from `accounts` where `username`='$username'";
	$results=$dblink->query($sql) or
		die("Something went wrong with $sql<br>".$dblink->error);
	if ($results->num_rows>0)
		redirect("index.php?page=register&errMsg=userExists");
	else {
		$sql="Insert into `accounts` (`username`, `auth_hash`) values ('$username', '$password')";
		$dblink->query($sql) or
			die("Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=login");
	}
}
echo '</div>';
echo '</section>';
?>
<script src="assets/js/log.js"></script>