<?php
include("config.php");
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo.png">
    <center>
        <title>Success Login </title>

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

    .pin {
        border: 2px solid green;
        border-radius: 15px;
        font-size: 40px;
        height: 40px;
        width: 175px;
        padding: 10px;
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
        height: 400px;
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
            <div class="form container submit-container">

                <h1 class=" bg-info text-white">WELCOME TO STI COLLEGE CUBAO!</h1>


                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <img src="img/logo.png" width="90px" height="90px"> </img>


                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <h3 class="text-dark">

                    <?php

                    if (isset($_SESSION['visit_status'])) {
                    ?>
                        <div class="w3-panel w3-cyan w3-text-white">
                            <h2> Hi, <?php echo $_SESSION['visit_name']; ?>!</h2>
                            <h3> You have <?php echo $_SESSION['visit_status']; ?> </h3>
                            <h3> Here is your PIN: </h3>
                            <div class="pin"><?php echo $_SESSION['visit_pin']; ?></div>
                            <h4> Please have a copy for your EXIT CODE. </h4>
                        </div>


                    <?php
                        unset($_SESSION['visit_name']);
                        unset($_SESSION['visit_pin']);
                        unset($_SESSION['visit_status']);
                    }

                    ?>

                    <?php

                    if (isset($_SESSION['user_status'])) {
                    ?>
                        <div class="w3-panel w3-blue w3-text-white">
                            <h2> Hi, <?php echo $_SESSION['ru_name']; ?>!</h2>
                            <h3> You have <?php echo $_SESSION['user_status']; ?> </h3>
                            <h3> Here is your PIN: <?php echo $_SESSION['ru_pin']; ?> </h3>
                            <h4> Please have a copy for your EXIT CODE. </h4>

                        </div>

                    <?php
                        unset($_SESSION['ru_name']);
                        unset($_SESSION['ru_pin']);
                        unset($_SESSION['user_status']);
                    }

                    ?>


                    </form>
                    </center>

            </div>
</body>

</html>