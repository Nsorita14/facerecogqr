<?php
include("config.php");
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <center>
        <title>Register Form </title>
        <link rel="stylesheet" type="text/css" href="css/qr_login_style.css">
        <link rel="stylesheet" type="text/css" href="css/design.css">
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
                            <h3> Here is your PIN: <?php echo $_SESSION['visit_pin']; ?> </h3>
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