<?php
include 'error.php';
include 'config.php';

if (isset($_GET['ru_studentid'])) {

    $ru_studentid   = $_GET['ru_studentid'];
    $ru_email = $_GET['ru_email'];

    $sql =  "SELECT * FROM rgstrd_users WHERE ru_studentid = '" . $ru_studentid . "' AND ru_email = '" . $ru_email . "' limit 1";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        header('location: Exit.php');
        exit();
    } else {
        echo "You have entered incorrect password!";
        exit();
    }
}




?>


<!DOCTYPE html>
<html>

<head>
    <center>
        <title>Register Form </title>
        <link rel="stylesheet" type="text/css" href="css/qr_login_style.css">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="body">

    <div class="container" id="container">
        <div class="form container submit-container">

            <h1 class=" bg-info text-white">Login User</h1>


            <form action="">


                <?php if (isset($_GET['error'])) { ?>
                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <img src="img/logo.png" width="90px" height="90px"> </img>
                <span>Make sure all the information are correct.</span>

                <form action="login_append.php">


                    <?php if (isset($_GET['error'])) { ?>
                        <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                    <?php } ?>



                    <input type="ru_studentid" name="ru_studentid" value="<?php
                                                                            if (empty($_GET['ru_studentid'])) {
                                                                                echo "";
                                                                            } else {
                                                                                echo $_GET['ru_studentid'];
                                                                            } ?>" placeholder="Student ID">

                    <input type="ru_email" name="ru_email" value="<?php
                                                                    if (empty($_GET['ru_email'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['ru_email'];
                                                                    } ?>" placeholder="Email">


                    <button>SUBMIT</button>
                    <br>
                    <p>Are you a visitor? <a href="VisitorPage.php">Register here</a></p>
                    <br>
                    </td>
                    </tr>

                </form>
                </center>

</body>

</html>