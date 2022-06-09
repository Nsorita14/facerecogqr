<?php
include("config.php");
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="icon" href="img/logo.png">
    <title>User Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.75 user-scalable=no" />
</head>

<center>
<body class="body">
    <div class="fade-in-image">
        <div class="container" id="container">
            <div class="form-container submit-container">
                <h1>User Login</h1>
                <form action="login_append.php" method="post">
                    <img src="img/logo.png" width="150px" height="150px"> 
                    <span>Make sure all the information are correct.</span>

                    <?php if (isset($_GET['error'])) { ?>
                        <p class="regerror-msg"> <?php echo $_GET['error']; ?> </p>
                    <?php } ?>


                    <h5>Please enter the following details:</h5>



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

                    <input type="studentid" name="qr_studentid" value="<?php
                                                                        if (empty($_GET['qr_studentid'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $_GET['qr_studentid'];
                                                                        } ?>" placeholder="Student ID number">


                    <select class="select" name="qr_course" value="<?php
                                                                    if (empty($_GET['qr_course'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_GET['qr_course'];
                                                                    } ?>" placeholder="Course">
                        <option disabled selected value>Select a Course</option>
                        <option class="option" value="ASCT">ASCT</option>
                        <option value="BSCPE">BSCPE</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCS">BSCS</option>
                        <option value="BSBA">BSBA</option>
                        <option value="BSA">BSA</option>
                        <option value="BSTM">BSTM</option>
                        <option value="BMMA">BMMA</option>
                        <option value="BSHM">BSHM</option>
                        <option value="TOP">TOP</option>
                        <option value="GAS">GAS</option>
                        <option value="STEM">STEM</option>
                        <option value="Faculty Staff">Faculty Staff</option>
                    </select>


                    <button>SUBMIT</button>
                    <br>
                    <p>Are you a visitor? <a href="visitorpage.php">Register here</a></p>
                    <br>
                    </td>
                    </tr>

                </form>
                </center>
            </div>
            </body>

</html>