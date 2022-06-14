
<?php
include 'config.php';
session_start();
error_reporting(0);

$id = intval($_SESSION['id']);
$findtrue = mysqli_query($conn, "SELECT * FROM `qr_pending-users` WHERE `count` = '$id'");

$stat = mysqli_fetch_assoc($findtrue)['rpi'];


while (!mysqli_fetch_assoc($findtrue)['rpi']){
    $page = $_SERVER['PHP_SELF'];
     ?>

<!DOCTYPE html>
<html>

<head>
<style type="text/css">
.load_page {
    margin-top: 41rem;
}

h1 {
    font-family: 'Monsserat';
    font-size: 50px;
}
</style>
</head>


<body>

<div class="load_page">
<center>
<h1> Kindly wait for the approval.</h1>
<img src="img/loading.gif" width="" height="">
</center>
</div>
</body>



</html> <?php
    sleep(1);
    header("Location: $page");
    
    /*
    
    $sec = "1";
    header("Refresh: $sec; url=$page");
    */
}
    
$_SESSION['pendingid'] = intval($findtrue['id']);
$_SESSION['firstname'] = $findtrue['qr_firstname'];
$_SESSION['lastname'] = $findtrue['qr_lastname'];
$_SESSION['studentid'] = $findtrue['qr_studentid'];
$_SESSION['course'] = $findtrue['qr_course'];




?>





