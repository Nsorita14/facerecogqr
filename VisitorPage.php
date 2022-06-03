<?php
include 'error.php';
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="img/logo.png">
    <meta charset="UTF-8">
    <center>
        <title>Visitor Form </title>

        <link rel="stylesheet" type="text/css" href="css/design.css">





</head>

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
        background-image: url(BGpicL.jpg);
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
        width: 54%;
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
        height: 680px;
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