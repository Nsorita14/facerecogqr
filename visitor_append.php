<?php
include 'config.php';



#Grab input values
$qr_firstname = $_POST["qr_firstname"];
$qr_lastname = $_POST["qr_lastname"];
$qr_number = $_POST["qr_number"];
$qr_gender = $_POST["qr_gender"];
$qr_purpose = $_POST["qr_purpose"];
$qr_pin =  substr(md5(rand()), 0, 6);


#Replace to insert a data to dropped indexes
$register = "INSERT INTO `qr_pending-visitors` (id, qr_firstname, qr_lastname, qr_number, qr_gender, qr_purpose, qr_pin) 
        VALUES (NULL, '$qr_firstname','$qr_lastname', '$qr_number', '$qr_gender', '$qr_purpose', '$qr_pin')";
$rs = mysqli_query($conn, $register);


if ($rs) {
        session_destroy();
        session_start();
        $_SESSION['pin'] = $qr_pin;
        $_SESSION['status'] = 'visitor';
        header('location: waitingpage.php');
} else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('QR Registration failed. Please try again later.');
        window.location.href='index.php';
        </script>");
}
