<?php
include 'config.php';
session_start();


#Grab input values
$qr_firstname = $_POST["qr_firstname"];
$qr_lastname = $_POST["qr_lastname"];
$qr_number = $_POST["qr_number"];
$qr_gender = $_POST["qr_gender"];
$qr_purpose = $_POST["qr_purpose"];
$id = 0;


#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM qr_users");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;


#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `qr_users` (id, qr_firstname,qr_lastname, qr_number, qr_gender, qr_purpose) 
        VALUES (NULL, '$qr_firstname','$qr_firstname', '$qr_number', '$qr_gender', '$qr_purpose')";
$rs = mysqli_query($conn, $register);


if ($rs) {
        $_SESSION['visit_status'] = "Successful Logged!";
        header('location: exit.php');
} else {
        echo "Error has occured.";
}
