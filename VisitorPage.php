<?php
include 'error.php';
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <center>
        <title>Visitor Form </title>
        <link rel="stylesheet" type="text/css" href="css/qr_login_style.css">
        <link rel="stylesheet" type="text/css" href="css/design.css">




        <title>Admin Dashboard </title>
</head>

<style>
    body {
        background-image: url(BGpicL.jpg);
        font-family: 'Monserrat';
    }
</style>

<body class="body">
    <div class="fade-in-image">
        <div class="container" id="container">
            <div class="form-container submit-container">

                <h1 class=" bg-info text-white">Login Visitor</h1>


                <form action="visitor_append.php" method="post">


                    <?php if (isset($_GET['error'])) { ?>
                        <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <img src="img/logo.png" width="90px" height="90px"> </img>
                    <span>Make sure all the information are correct.</span>




                    <?php if (isset($_GET['error'])) { ?>
                        <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <H5>Please enter the following details:</h5>



                    <input type="name" name="qr_firstname" value="<?php
                                                                    if (empty($_GET['qr_firstname'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['qr_firstname'];
                                                                    } ?>" placeholder="First Name">


                    <input type="name" name="qr_lastname" value="<?php
                                                                    if (empty($_GET['qr_lastname'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['qr_lastname'];
                                                                    } ?>" placeholder="Last Name">

                    <input type="studentid" name="  qr_number" value="<?php
                                                                        if (empty($_GET['qr_number'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $_GET['qr_number'];
                                                                        } ?>" placeholder="Mobile Number">


                    <select class="select" name="qr_gender" value="<?php
                                                                    if (empty($_GET['qr_gender'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['qr_gender'];
                                                                    } ?>" placeholder="Gender">
                        <option disabled selected value>Gender</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>


                    <select class="select" name="qr_purpose" value="<?php
                                                                    if (empty($_GET['ru_course'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['ru_course'];
                                                                    } ?>" placeholder="Purpose">
                        <option disabled selected value>Purpose of visiting:</option>
                        <option value="Enrollment">Enrollment</option>
                        <option value="Payment">Payment</option>
                        <option value="Guidance">Guidance</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Appointment">Appointment</option>
                        <option value="Clearance">Clearance</option>
                    </select>



                    <br>
                    <button>SUBMIT</button>
                    <p>Are you a Registered User? <a href="loginuser.php">Log in</a></p>
                    </td>
                    </tr>

                </form>
                </center>

</body>

</html>