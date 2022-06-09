<?php
include 'config.php';
session_start();

?>


<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">


	<title>Exit Form </title>

</head>
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
		;
	}

	h3 {
		font-size: 50px;

	}
</style>
</head>
<center>


	<body>

		<body background="img/BGpicL.jpg">





			<div class="fade-in-image">
				<div class="container" id="container">
					<div class="form-container submit-container">

						<h1>Exit Form</h1>
						<br>
						<br>
						<img src="img/logo.png" width="280px" height="280px"> </img>
						<br>
						<h3> Please enter the following details:</h3>

						<br>

						<form action="/action_page.php">

							<label for="name">Name:</label><br>
							<input type="name" name="qr_firstname" value="<?php
																			if (empty($_GET['qr_firstname'])) {
																				echo "";
																			} else {
																				echo $_GET['qr_firstname'];
																			} ?>" placeholder="First Name"><br>

							<br>
							<label for="Pin">PIN:</label><br>
							<input type="text" id="pin" name="pin" value=""><br>

							<tr>
								<br>

								<button type="button">SUBMIT</button></a>
						</form>

</center>


</body>

</html>