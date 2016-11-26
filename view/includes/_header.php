<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lets GO - @ViewBag.Title</title>
		<!--Import Google Icon Font-->
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
	
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="assets/css/materialize/materialize.min.css">

		<!-- Website css -->
		<link rel="stylesheet" href="assets/css/styles.css">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

    <body>
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize/materialize.min.js"></script>
        <header class="bg-header navbar-fixed">
            <nav class="blue darken-4">
                <?php include '_menu.php';?>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo"><img class="logo" src="assets/images/logo.png"></a>
                </div>
            </nav>
        </header>
        <main>