<?php
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Exit Form </title>
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<style>
		body {
			background-image: url("img/BGpicL.jpg");
			}

		label {
			font-size: 50px;
			font-weight: 700;
			}

		span {

			margin-bottom: 3rem;
			}

		h3 {
			font-size: 50px;
			}
	</style>
</head>

<center>
	<body class="body">
        <div class="fade-in-image">
            <div class="container" id="container">
                <div class="form-container submit-container">
					<h1>Exit Form</h1>
					<form autocomplete="off" action="exitcheck.php" method="post">
						<img src="img/logo.png" width="200px" height="200px"> </img>
						<h3> Please enter your pin:</h3>
	
						<input type="text" id="pin" name="pin" value="">
						<button>SUBMIT</button>
					</form>
		</div>
	</body>
</center>
</html>