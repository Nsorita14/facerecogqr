<?php
include '../config.php';
session_start();


#Grab input values
$qr_firstname = $_POST["qr_firstname"];
$qr_lastname = $_POST["qr_lastname"];
$qr_studentid = $_POST["qr_studentid"];
$qr_course = $_POST["qr_course"];

$qr_pin =  substr(md5(rand()), 0, 6);


#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM pending_qr");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;


#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `pending_qr` (qr_firstname,qr_lastname, qr_studentid, qr_course, qr_pin) 
        VALUES ('$qr_firstname','$qr_firstname', '$qr_studentid', '$qr_course', '$qr_pin')";
$rs = mysqli_query($conn, $register);



if ($rs) {
        $_SESSION['ru_name'] = "$qr_firstname";
        $_SESSION['ru_pin'] = "$qr_pin";
        $_SESSION['user_status'] = "successfully logged!";

        header('location: success.php');
} else {
        echo "Error has occured.";
}
