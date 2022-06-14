
<?php
include 'config.php';
session_start();
error_reporting(0);

$id = intval($_SESSION['id']);
$findtrue = mysqli_query($conn, "SELECT * FROM `qr_pending-users` WHERE `count` = '$id'");

$stat = mysqli_fetch_assoc($findtrue)['rpi'];
echo $stat;
while (mysqli_fetch_assoc($findtrue)['rpi'] = false) {
    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
    header("Refresh: $sec; url=$page");
}
session_start();
$_SESSION['pendingid'] = intval($findtrue['id']);
$_SESSION['firstname'] = $findtrue['qr_firstname'];
$_SESSION['lastname'] = $findtrue['qr_lastname'];
$_SESSION['studentid'] = $findtrue['qr_studentid'];
$_SESSION['course'] = $findtrue['qr_course'];
header("Location: success.php");
exit();

?>

<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        iframe {
            width: 100vw;
            height: 100vh;
            margin-top: 25vh;
            margin-left: auto;
            margin-right: auto;
        }
        .load_page {
            margin-top: 41rem;
        }

        h1 {
            font-family: 'Monserat';
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

</html>


