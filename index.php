<?php
	// Include functions
	include("functions.php");
?>
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
	
    <!-- NAVIGATION -->
    <?php
		include("navigation.php");
	?>
	
	<?php
		// Check if page variable is set
		if (!isset($_GET['page']))
			$page="home";
		else
			$page=$_GET['page'];
		
		// Determine which page is selected
		switch ($page) {
			case "school":
				include("school.php");
				break;
			case "hobbies":
				include("hobbies.php");
				break;
			case "movies":
				include("movies.php");
				break;
			case "contact":
				include("contact.php");
				break;
			case "results":
				include("results.php");
				break;
			case "login":
				include("login.php");
				break;
			case "register":
				include("register.php");
				break;
			default:
				include("home.php");
				break;
		}
	?>
	
	<!-- BUTTON TO TOP -->
    <p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>
	<!-- FOOTER -->
    <footer>
        <div class="container text-center">
            <p>Designed by <a href="http://moozthemes.com"><span>MOOZ</span>Themes.com</a></p>
        </div>
    </footer>
</body>
</html>
<!-- JS -->
<script src="assets/js/add-content.js"></script>