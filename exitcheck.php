<?php
include 'config.php';
$pin = $_POST["pin"];
#$pin = '2f139';

$select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_logs-users` WHERE `qr_pin` = '$pin'"));
$selectvisit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_logs-visitors` WHERE `qr_pin` = '$pin'"));
if($select){
    session_start();
    $_SESSION['pin'] = $pin;
    $datetime = date('Y-m-d H:i:s');
    $time_out = mysqli_query($conn, "UPDATE `qr_logs-users` SET `time_out` = '$datetime' WHERE `qr_pin` = '$pin'");
    if ($time_out) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully recorded. Please continue.');
        window.location.href='exit_page.php';
        </script>");
    }
    else{
        echo "error 2";
    }
}
else if ($selectvisit){
    session_start();
    $_SESSION['pin'] = $pin;
    $datetime = date('Y-m-d H:i:s');
    $time_out = mysqli_query($conn, "UPDATE `qr_logs-visitors` SET `time_out` = '$datetime' WHERE `qr_pin` = '$pin'");
    if ($time_out) {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully recorded. Please continue.');
        window.location.href='exit_page.php';
        </script>");
    }
    else{
        echo "error 2";
    }
}


?>