<?php
include 'config.php';
session_start();

$selected_id = $_SESSION['id'];
$turnsignal = mysqli_query($conn, "UPDATE `qr_pending-users` SET `rpi` = 'true' WHERE `count` = '$selected_id'");

if ($turnsignal) {
	echo ("<script LANGUAGE='JavaScript'>
	window.alert('You can now proceed and enter.');
	window.location.href='index.php';
	</script>");

}
?>