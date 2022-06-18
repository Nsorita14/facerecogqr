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
        font-size: 23px;
    }

    h3 {
        font-size: 36px;
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



                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>



                <h3 class="text-dark">
                    <br> <br>
                    <img src="img/logo.png" width="200px" height="200px"> </img>
                    <?php

                    if (isset($_SESSION['qr_firstname'])) {
                    ?>
                        <div class="w3-panel w3-blue w3-text-white">
                            <h3> Hi,<?php echo $_SESSION['name'];
                                    ?>Mary! </h3>
                            <h4>Thank you for visiting <br> STI College Cubao!</h4>

                            <h3>You have successfully exit.</h3>
                            <h3>You may proceed to the guard.
                                <br>
                                <br>Please show this message and <br>claim your valid ID.
                            </h3>

                        <?php
                        unset($_SESSION['qr_firstname']);
                    }

                        ?>


                        </form>
                        </center>

                        </div>
</body>

</html>