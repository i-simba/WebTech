<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Ivan's homepage</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
	
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html"><img src="images/logo.png" alt="Lattes theme logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="school.html">School</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hobbies.html">Hobbies</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="movies.html">Movies</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact-noscript.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header class="contactP">
        <div class="container">
            <div class="slider-container">
                <div class="intro-text">
                    <div class="intro-heading">Contact</div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="light-bg">
        <div class="container">
			<div class="section-title text-center">
				<h2>Get In Contact</h2>
			</div>
			<?php
				session_start();
				if (!isset($_POST['submit'])) {
					
					echo '<form id="mainForm" method="post" action="">';
					echo '<div class="row">';
					echo '<div class="col-lg-6">';
					echo '<div class="section-title">';
					echo '<div id="page">';
					
					////////////////
					// FIRST NAME //
					////////////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "firstName")) {
						echo '<div class="form-group margin-b-5 has-error">';
						echo '<label class="control-label" for="firstname">First Name: </label>';
						echo '<input type="text" class="form-control form-mine" id="firstname" name="firstname"  />';
						// Null Check
						if (strstr($_GET['errMsg'], "firstNameNull"))
							echo '<div class="red" id="fnFeedback">First name cannot be empty!</div>';
						// Min Char Check (>=2)
						if (strstr($_GET['errMsg'], "firstNameMin"))
							echo '<div class="red" id="fnFeedback">First name must be 2 characters or more!</div>';
						// Regex Check
						if (strstr($_GET['errMsg'], "firstNameRegex"))
							echo '<div class="red" id="fnFeedback">First name can only contain letters, -, and \'!</div>';
						echo '</div>';
					} else {
						if (isset($_SESSION['firstname']))
							echo '<div class="form-group margin-b-5 has-success">';
						else
							echo '<div class="form-group margin-b-5">';
						echo '<label class="control-label" for="firstname">First Name: </label>';
						// Keep Valid Input
						if (isset($_SESSION['firstname']))
							echo '<input type="text" class="form-control form-mine" id="firstname" name="firstname" value="'.$_SESSION['firstname'].'"  />';
						else
							echo '<input type="text" class="form-control form-mine" id="firstname" name="firstname"  />';
						echo '<div class="red" id="fnFeedback">&emsp;</div>';
						echo '</div>';
					}

					///////////////
					// LAST NAME //
					///////////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "lastName")) {
						echo '<div class="form-group margin-b-5 has-error">';
						echo '<label class="control-label" for="lastname">Last Name: </label>';
						echo '<input type="text" class="form-control form-mine" id="lastname" name="lastname"  />';
						// Null Check
						if (strstr($_GET['errMsg'], "lastNameNull"))
							echo '<div class="red" id="lnFeedback">Last name cannot be empty!</div>';
						// Min Char Check (<2)
						if (strstr($_GET['errMsg'], "lastNameMin"))
							echo '<div class="red" id="lnFeedback">Last name must be 2 characters or more!</div>';
						// Regex Check
						if (strstr($_GET['errMsg'], "lastNameRegex"))
							echo '<div class="red" id="lnFeedback">Last name can only contain letters, -, and \'!</div>';
						echo '</div>';
					} else {
						if (isset($_SESSION['lastname']))
							echo '<div class="form-group margin-b-5 has-success">';
						else
							echo '<div class="form-group margin-b-5">';
						echo '<label class="control-label" for="lastname">Last Name: </label>';
						// Keep Valid Input
						if (isset($_SESSION['lastname']))
							echo '<input type="text" class="form-control form-mine" id="lastname" name="lastname" value="'.$_SESSION['lastname'].'"  />';
						else
							echo '<input type="text" class="form-control form-mine" id="lastname" name="lastname"  />';
						echo '<div class="red" id="lnFeedback">&emsp;</div>';
						echo '</div>';
					}

					///////////
					// EMAIL //
					///////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "email")) {
						echo '<div class="form-group margin-b-5 has-error">';
						echo '<label class="control-label" for="email">Email: </label>';
						echo '<input type="text" class="form-control form-mine" id="email" name="email"  />';
						// Null Check
						if (strstr($_GET['errMsg'], "emailNull"))
							echo '<div class="red" id="emFeedback">Email cannot be empty!</div>';
						// Regex Check
						if (strstr($_GET['errMsg'], "emailRegex"))
							echo '<div class="red" id="emFeedback">Plese enter a valid email!</div>';
						echo '</div>';
					} else {
						if (isset($_SESSION['email']))
							echo '<div class="form-group margin-b-5 has-success">';
						else
							echo '<div class="form-group margin-b-5">';
						echo '<label class="control-label" for="email">Email: </label>';
						// Keep Valid Input
						if (isset($_SESSION['email']))
							echo '<input type="text" class="form-control form-mine" id="email" name="email" value="'.$_SESSION['email'].'"  />';
						else
							echo '<input type="text" class="form-control form-mine" id="email" name="email"  />';
						echo '<div class="red" id="emFeedback">&emsp;</div>';
						echo '</div>';
					}

					///////////
					// Phone //
					///////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "phone")) {
						echo '<div class="form-group margin-b-5 has-error">';
						echo '<label class="control-label" for="phonenumber">Phone Number: </label>';
						echo '<input type="text" class="form-control form-mine" id="phonenumber" name="phonenumber"  />';
						// Null Check
						if (strstr($_GET['errMsg'], "phoneNull"))
							echo '<div class="red" id="pnFeedback">Phone number cannot be empty!</div>';
						// Regex Check
						if (strstr($_GET['errMsg'], "phoneRegex"))
							echo '<div class="red" id="pnFeedback">Phone number can only contain numbers!</div>';
						// Min Check (<10)
						if (strstr($_GET['errMsg'], "phoneMin"))
							echo '<div class="red" id="pnFeedback">Please enter a valid phone number! (exactly 10 digits)</div>';
						// Max Check (>10)
						if (strstr($_GET['errMsg'], "phoneMax"))
							echo '<div class="red" id="pnFeedback">Phone number cannot be more than 10 digits!</div>';
						echo '</div>';
					} else {
						if (isset($_SESSION['phone']))
							echo '<div class="form-group margin-b-5 has-success">';
						else
							echo '<div class="form-group margin-b-5">';
						echo '<label class="control-label" for="phonenumber">Phone Number: </label>';
						// Keep Valid Input
						if (isset($_SESSION['phone']))
							echo '<input type="text" class="form-control form-mine" id="phonenumber" name="phonenumber" value="'.$_SESSION['phone'].'"  />';
						else
							echo '<input type="text" class="form-control form-mine" id="phonenumber" name="phonenumber"  />';
						echo '<div class="red" id="pnFeedback">&emsp;</div>';
						echo '</div>';
					}

					//////////////
					// USERNAME //
					//////////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "userName")) {
						echo '<div class="form-group margin-b-5 has-error">';
						echo '<label class="control-label" for="username">Create a username: </label>';
						echo '<input type="text" class="form-control form-mine" id="username" name="username"  />';
						// Null Check
						if (strstr($_GET['errMsg'], "userNameNull"))
							echo '<div class="red" id="unFeedback">Username cannot be empty!</div>';
						// Min Check
						if (strstr($_GET['errMsg'], "userNameMin"))
							echo '<div class="red" id="unFeedback">Username must be 6 characters or more!</div>';
						echo '</div>';
					} else {
						if ($_SESSION['username'])
							echo '<div class="form-group margin-b-5 has-success">';
						else
							echo '<div class="form-group margin-b-5">';
						echo '<label class="control-label" for="username">Create a username: </label>';
						// Keep Valid Input
						if ($_SESSION['username'])
							echo '<input type="text" class="form-control form-mine" id="username" name="username" value="'.$_SESSION['username'].'"  />';
						else
							echo '<input type="text" class="form-control form-mine" id="username" name="username"  />';
						echo '<div class="red" id="unFeedback">&emsp;</div>';
						echo '</div>';
					}

					//////////////
					// PASSWORD //
					//////////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "password")) {
						echo '<div class="form-group margin-b-5 has-error">';
						echo '<label class="control-label" for="password">Create a password</label>';
						echo '<input type="password" class="form-control form-mine" id="password" name="password"  />';
						// Null Check
						if (strstr($_GET['errMsg'], "passwordNull"))
							echo '<div class="red" id="pwFeedback">Password cannot be empty!</div>';
						// Min Check
						if (strstr($_GET['errMsg'], "passwordMin"))
							echo '<div class="red" id="pwFeedback">Password must be 6 characters or more!</div>';
						echo '</div>';
					} else {
						if (isset($_SESSION['password']))
							echo '<div class="form-group margin-b-5 has-success">';
						else
							echo '<div class="form-group margin-b-5">';
						echo '<label class="control-label" for="password">Create a password</label>';
						// Keep Valid Input
						if (isset($_SESSION['password']))
							echo '<input type="password" class="form-control form-mine" id="password" name="password" value="'.$_SESSION['password'].'"  />';
						else
							echo '<input type="password" class="form-control form-mine" id="password" name="password"  />';
						echo '<div class="red" id="pwFeedback">&emsp;</div>';
						echo '</div>';
					}

					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '<div class="col-lg-6">';
					echo '<div class="section-title">';
					echo '<div class="page">';
					
					/////////////
					// Comment //
					/////////////
					if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], "commentNull")) {
						echo '<div class="form-group has-error">';
						echo '<label class="control-label" for="comment">Comment: </label>';
						echo '<textarea class="form-control form-mine" id="comment" rows="22" name="comment"  ></textarea>';
						echo '<div class="red" id="cmFeedback">Comment cannot be empty!</div>';
						echo '</div>';
					} else {
						if (isset($_SESSION['comment']))
							echo '<div class="form-group has-success">';
						else
							echo '<div class="form-group">';
						echo '<label class="control-label" for="comment">Comment: </label>';
						// Keep Valid Input
						if (isset($_SESSION['comment']))
							echo '<textarea class="form-control form-mine" id="comment" rows="22" name="comment"  >'.$_SESSION['comment'].'</textarea>';
						else
							echo '<textarea class="form-control form-mine" id="comment" rows="22" name="comment"  ></textarea>';
						echo '<div class="red" id="cmFeedback">&emsp;</div>';
						echo '</div>';
					}
					
					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '<div class="section-title text-center">';
					echo '<input type="submit" value="SIGN UP!" name="submit" class="btn-mine" />';
					echo '</div>';
					echo '</form>';
					session_unset();
				} else {
					
					$errors="";
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$email=$_POST['email'];
					$phone=$_POST['phonenumber'];
					$username=$_POST['username'];
					$password=$_POST['password'];
					$comment=$_POST['comment'];
					
					// Regex
					$alphaRegex = "/^[A-Za-z'-]+$/";
					$emailRegex = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
					$phoneRegex = '/^[0-9]*$/';
					
					// First Name Checks
					if ($firstname==NULL)
						$errors="firstNameNull";
					else if (strlen($firstname) < 2 && $firstname!=NULL)
						$errors.="firstNameMin";
					else if (!preg_match($alphaRegex, $firstname))
						$errors.="firstNameRegex";
					else
						$_SESSION['firstname']=$firstname;
					
					// Last Name Checks
					if ($lastname==NULL)
						$errors.="lastNameNull";
					else if (strlen($lastname) < 2 && $lastname!=NULL)
						$errors.="lastNameMin";
					else if (!preg_match($alphaRegex, $lastname))
						$errors.="lastNameRegex";
					else
						$_SESSION['lastname']=$lastname;
					
					// Email Checks
					if ($email==NULL)
						$errors.="emailNull";
					else if (!preg_match($emailRegex, $email))
						$errors.="emailRegex";
					else
						$_SESSION['email']=$email;
					
					// Phone Checks
					if ($phone==NULL)
						$errors.="phoneNull";
					else if (strlen($phone) < 10)
						$errors.="phoneMin";
					else if (strlen($phone) > 10)
						$errors.="phoneMax";
					else if (!preg_match($phoneRegex, $phone))
						$errors.="phoneRegex";
					else
						$_SESSION['phone']=$phone;
					
					// Username Checks
					if ($username==NULL)
						$errors.="userNameNull";
					else if (strlen($username) < 6)
						$errors.="userNameMin";
					else
						$_SESSION['username']=$username;
					
					// Password Checks
					if ($password==NULL)
						$errors.="passwordNull";
					else if (strlen($password) < 6)
						$errors.="passwordMin";
					else
						$_SESSION['password']=$password;
					
					// Comment Checks
					if ($comment==NULL)
						$errors.="commentNull";
					else
						$_SESSION['comment']=$comment;
					
					// Redirect IF there is an error
					if ($errors!=NULL)
						header("Location: contact-noscript.php?errMsg=$errors");
					
					echo '<p>First name: '.$_POST['firstname'].'</p>';
					echo '<p>Last name: '.$_POST['lastname'].'</p>';
					echo '<p>Email: '.$_POST['email'].'</p>';
					echo '<p>Phone: '.$_POST['phonenumber'].'</p>';
					echo '<p>Username: '.$_POST['username'].'</p>';
					echo '<p>Password: '.$_POST['password'].'</p>';
					echo '<p>Comments: '.$_POST['comment'].'</p>';
				}
			?>
        </div>
        <!-- /.container -->
    </section>    
    <p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>
    <footer>
        <div class="container text-center">
            <p>Designed by <a href="http://moozthemes.com"><span>MOOZ</span>Themes.com</a></p>
        </div>
    </footer>
	<!-- <script src="assets/js/event-listener.js"></script> -->
</body>
</html>