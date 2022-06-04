<html>


<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<script src="js/jquery.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<link rel="icon" href="img/logo.png">
	<script src="js/bootstrap.bundle.min.js"></script>
	<title>QR Access</title>
	<link rel="stylesheet" type="text/css" href="css/design.css">

	<style>
		@import "font/montserrat.css";

		body {
			font-family: 'Montserrat', sans-serif;
		}

		body {
			background-image: url(img/BGpicL.jpg);
			background-position: center;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 0px;
		}

		button {
			border-radius: 40px;
			border: 1px solid #5DB1B9;
			background-color: #5DB1B9;
			color: #FFFFFF;
			font-size: 75px;
			font-weight: bold;
			padding: 25px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
			margin: 30px;
		}


		.container {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
						0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: visible;
			width: 75vw;
			height: 75vh;
		}

		h1 {
			padding: 25px;
			font-weight: 600;
			font-size: 60px;
			background: #5DB1B9;
			color: white;
			font-weight: bolder;}
		h2 {
			padding: 25px;
			font-weight: 600;
			font-size: 40px;
			color: black;
			font-weight: bolder;}
	</style>
</head>
<center>


	<body>

		<div class="fade-in-image">
			<div class="container" id="container">
				<div class="form-container submit-container">


					<h1 class=" bg-info text-white">WELCOME TO<br> STI COLLEGE CUBAO</h1>
					<br>
					<img src="img/logo.png" width="350px" height="350px"></img>
					<br>
					<h2>Please select, if you are a: </h2>



					<a href="loginuser.php"><button type="button">Student</button></a><br>
					<a href="visitorpage.php"><button type="button">Visitor</button></a>



</center>
</body>

</html>