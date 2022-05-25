<html><head>
    <title>Welcome Form</title>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    body {
	background-image: url("BGpic.jpg");
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

span {
	margin: 10px 0 0px;
	font-size: 14px;
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
	margin: 0;
	border-radius: 20px;
}

input {
	background-color: #ccd5d5;
	border: none;
	border-radius: 15px;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.image {
	margin-top: -2px;
	margin-left: -35px;
 }

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.loginerror-msg{
   background: #ffeeee;
   color: #ba0200;
   font-size: 12px;
   padding: 5px;
   width: 100%;
   border-radius: 5px;
   margin: 5px auto;
}

h1{

	padding: 15px;
	font-weight: 600;
	font-size: 45px;
	background: #5DB1B9;
	color: white
}



    </style>
    </head>
    <center>

     <body style="background-color:#92D2E2;">
     <body background="BGpicL.jpg">

     <div class="container" id="container">
    <div class="form-container submit-container">


    <h1 class=" bg-info text-white">WELCOME TO STI COLLEGE CUBAO</h1>


<h2>Please select</h2>




<a href="http://localhost/facerecogqr/RegPage.php"><button type="button">student</button></a>
<a href="http://localhost/facerecogqr/VisitorPage.php"><button type="button">visitor</button></a>



</center>
</body>
</html>