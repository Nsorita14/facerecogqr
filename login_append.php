<?php
include 'config.php';
session_start();


#Grab input values
$qr_firstname = $_POST["qr_firstname"];
$qr_lastname = $_POST["qr_lastname"];
$qr_studentid = $_POST["qr_studentid"];
$qr_course = $_POST["qr_course"];
$$id = 0;


#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM log_qr");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;


#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `log_qr` (id, qr_firstname,qr_lastname, qr_studentid, qr_course) 
        VALUES (NULL, '$qr_firstname','$qr_firstname', '$qr_studentid', '$qr_course')";
$rs = mysqli_query($conn, $register);
header('location:exit.php');


if ($rs) {
        $_SESSION['user_status'] = "Successful Logged!";
        header('location: exit.php');
} else {
        echo "Error has occured.";
}
