<!--SESSION CODE-->
<!--How to link the PHP file to the HTML file, and MUST be in this order-->


<?php

include("includes/config.php"); // to link the index.php to the config.php
include("includes/classes/Artist.php");
include("includes/classes/Album.php");



//session_destroy();  to manually log out

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}
?>



<!---->
<!---->
<!-- BELOW LINE IS MAIN HTML MARK-UP -->
<!---->
<!---->
<!---->
<!---->


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--GOOGLE FONTS-->
	
    <!--CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	
	<title>Shuffle</title>
</head>
<body>
<!--<h1>Welcome to shuffle!</h1>-->$_COOKIE
<div id="mainContainer">

	<div id="topContainer">

		<?php include("includes/navBarContainer.php")?> <!--this is optional as the only purpose is to separate the files so that the main index page will not be crowded-->
		
		<div id="mainViewContainer">
			<div id="mainContent">