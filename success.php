<?php
include 'config.php';
session_start();
$selected_id = $_SESSION['id'];
$from = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_pending-users` WHERE `count` = '$selected_id'"));

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
        font-size: 3vh;
        height: 50px;
        width: 200px;
        padding: 10px;
    }

    h2 {
        font-size: 2vh;
    }

    h3 {
        font-size: 3vh;
        color: black;
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
                <img src="img/logo.png" width="200px" height="200px"> </img>


                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <h3 class="text-dark">

                    <?php

                    if (isset($_SESSION['id'])) {
                    ?>
                        <div class="w3-panel w3-blue w3-text-white">
                            <h2> Hi, <?php echo $_SESSION['name']; ?>!</h2>
                            <h3> You have been accepted. Here is your PIN: </h3>
                            <h3><?php echo $_SESSION['qr_pin']; ?> </h3>
                            <h2> Please have a copy for your EXIT CODE. Show this to the guard to enter.</h4>
                        </div>

                    <?php
                        unset($_SESSION['ru_name']);
                        unset($_SESSION['ru_pin']);
                    }

                    ?>


                    </form>
                    </center>

            </div>
</body>

</html>