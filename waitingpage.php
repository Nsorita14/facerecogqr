<?php
include 'config.php';
session_start();

$id = intval($_SESSION['id']);
$findtrue = mysqli_query($conn, "SELECT * FROM `qr_pending-users` WHERE `id` = '$id'");
$check = mysqli_fetch_assoc($findtrue)['rpi'];

if ($check) {
    mysqli_fetch_assoc($findtrue);
    session_start();
    $_SESSION['pendingid'] = intval($findtrue['id']);
    $_SESSION['firstname'] = $findtrue['qr_firstname'];
    $_SESSION['lastname'] = $findtrue['qr_lastname'];
    $_SESSION['studentid'] = $findtrue['qr_studentid'];
    $_SESSION['course'] = $findtrue['qr_course'];
    header("Location: success.php");
    exit();
}
else {
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}

?>

<!DOCTYPE html>
<html>
<head>

<style type="text/css">
iframe{
    width: 100vw;
    height: 100vh;
    margin-top: 25vh;
    margin-left: auto;
    margin-right: auto;
}
</style>


</head>
<body>
<center>
<h1> Please wait for the approval. </h1>
</center>
</body>
</html>