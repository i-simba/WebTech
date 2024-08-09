<?php

echo '<nav class="navbar navbar-default navbar-fixed-top">';
echo '<div class="container">';

// Brand and toggle get grouped for better mobile display
echo '<div class="navbar-header page-scroll">';
	echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
	echo '<span class="sr-only">Toggle navigation</span>';
	echo '<span class="icon-bar"></span>';
	echo '<span class="icon-bar"></span>';
	echo '<span class="icon-bar"></span>';
	echo '</button>';
	
	if (!isset($_GET['page']))
		$page="home";
	else
		$page=$_GET['page'];

	if ($page=="home")
		echo '<a class="navbar-brand page-scroll logo-active" href="index.php"><img src="images/logo.png" alt="Lattes theme logo"></a>';
	else
		echo '<a class="navbar-brand page-scroll" href="index.php"><img src="images/logo.png" alt="Lattes theme logo"></a>';
echo '</div>';

// Collect the nav links, forms, and other content for toggling
echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
	echo '<ul class="nav navbar-nav navbar-right">';
	echo '<li class="hidden">';
	echo '<a href="#page-top"></a>';
	echo '</li>';

	if ($page=="school")
		echo '<li><a class="page-scroll bold nav-active" href="index.php?page=school">School</a></li>';
	else
		echo '<li><a class="page-scroll bold" href="index.php?page=school">School</a></li>';
	if ($page=="hobbies")
		echo '<li><a class="page-scroll bold nav-active" href="index.php?page=hobbies">Hobbies</a></li>';
	else
		echo '<li><a class="page-scroll bold" href="index.php?page=hobbies">Hobbies</a></li>';
	if ($page=="movies")
		echo '<li><a class="page-scroll bold nav-active" href="index.php?page=movies">Movies</a></li>';
	else
		echo '<li><a class="page-scroll bold" href="index.php?page=movies">Movies</a></li>';
	if ($page=="contact")
		echo '<li><a class="page-scroll bold nav-active" href="index.php?page=contact">Contact</a></li>';
	else
		echo '<li><a class="page-scroll bold" href="index.php?page=contact">Contact</a></li>';
	if ($page=="results")
		echo '<li><a class="page-scroll bold nav-active" href="index.php?page=results">Results</a></li>';
	else
		echo '<li><a class="page-scroll bold" href="index.php?page=login">Login</a></li>';
	echo '</ul>';
echo '</div>';
// navbar-collapse
echo '</div>';
// container-fluid
echo '</nav>';

?>