<?php
include 'config.php';
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo.png">
    <center>
        <title>Success Login </title>

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <script src="js/jquery.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <link rel="icon" href="img/logo.png">
        <script src="js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .body {
        background-image: url("img/BGpicL.jpg");
    }

    .pin {
        border: 2px solid green;
        border-radius: 15px;
        font-size: 60px;
        height: 50px;
        width: 200px;
        padding: 10px;
    }

    h2 {
        font-size: 50px;
    }

    h3 {
        font-size: 50px;
        color: green;
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
                <img src="img/logo.png" width="270px" height="270px"> </img>


                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <h3 class="text-dark">

                    <?php

                    if (isset($_SESSION['pendingid'])) {
                    ?>
                        <div class="w3-panel w3-cyan w3-text-white">
                            <h2> Hi, <?php echo $_SESSION['firstname']; ?>!</h2>
                            <h3> You have been accepted. Please position yourself in front of the turnstile for face capturing</h3>
                            <h2> Here is your PIN: </h2>
                            <div class="pin"><?php echo $_SESSION['visit_pin']; ?></div>
                            <h2> Please have a copy for your EXIT CODE. </h2>
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