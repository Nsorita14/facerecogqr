<?php
include 'config.php';
session_start();
$selected_id = $_SESSION['pin'];
$from = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_logs-users` WHERE `qr_pin` = '$selected_id'"));
if ($from){
    $name = $from['qr_firstname']." ".$from['qr_lastname'];
    $course = $from['qr_course'];
}
else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thank you, good bye.');
    window.open('https://www.google.com');
    </script>");
}
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
        <meta name="viewport" content="width=device-width, initial-scale=0.75 user-scalable=no" />
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
        font-size: 1.5vh;
        color: black;
    }
</style>

<body class="body">

    <div class="fade-in-image">
        <div class="container" id="container">
            <div class="form container submit-container">

                <h1 class=" bg-info text-white">STI COLLEGE CUBAO</h1>


                <h3 class="text-dark">
 
                    <img src="img/logo.png" width="200px" height="200px"> </img>
                    <?php

                    if (isset($_SESSION['pin'])) {
                    ?>
                        <div class="w3-panel w3-blue w3-text-white">
                            <h3> Hi,<?php echo $name; ?>. </h3>
                            <h4>Thank you for visiting <br> STI College Cubao!</h4>

                            <h3>You have successfully exit.</h3>
                            <h3>You may proceed to the guard.
                                <br>Please show this message and
                                <br>claim your valid ID.
                            </h3>

                        <?php
                        unset($_SESSION['pin']);
                    }

                        ?>


                        </form>
                        </center>

                        </div>
</body>

</html>