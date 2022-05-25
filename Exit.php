<!DOCTYPE html>
<html>

<head>
	<title>Exit Form </title>

</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {
		background-position: center;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		font-family: 'Montserrat', sans-serif;
		height: 100vh;
		margin: -20px 0 0px;
	}

	h1 {
		font-weight: bold;
		margin: 0;
	}

	button {
		border-radius: 20px;
		border: 1px solid #5DB1B9;
		background-color: #5DB1B9;
		color: #FFFFFF;
		font-size: 12px;
		font-weight: bold;
		padding: 12px 45px;
		letter-spacing: 1px;
		text-transform: uppercase;
		transition: transform 80ms ease-in;
		margin-top: 2px;
	}

	form {
		background-color: #FFFFFF;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 50px;
		height: 100%;
		text-align: center;
		border-radius: 20px;
	}

	input {
		background-color: #ccd5d5;
		border: none;
		border-radius: 15px;
		padding: 12px 15px;
		margin: 6px;
		width: 50%;
	}


	select {
		background-color: #eee;
		border-radius: 15px;
		padding: 12px 15px;
		margin: 6px 0;
		width: 100%;
	}

	.container {
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
			0 10px 10px rgba(0, 0, 0, 0.22);
		position: relative;
		overflow: hidden;
		width: 768px;
		max-width: 100%;
		height: 550px;
	}


	h1 {

		padding: 15px;
		font-weight: 600;
		font-size: 40px;
		background: #5DB1B9;
		color: white;
	}


	body {
		font-family: 'Montserrat', sans-serif;

	}

	label {
		font-size: 20px;
		font-weight: 700;
	}

	span {

		margin-bottom: 3rem;
		;
	}
</style>
</head>
<center>


	<body>

		<body background="img/BGpicL.jpg">



			<div class="container" id="container">
				<div class="form-container submit-container">

					<h1>Exit Form</h1>
					<br>
					<img src="img/logo.png" width="90px" height="90px"> </img>
					<h3> Please enter the following details:</h3>
					<form action="/action_page.php">
						<label for="name">Name:</label><br>
						<input type="text" id="name" name="name" value=""><br>

						<label for="Pin">PIN:</label><br>
						<input type="text" id="pin" name="pin" value=""><br>

						<tr>

							<button type="button">SUBMIT</button></a>
					</form>

</center>


</body>

</html>