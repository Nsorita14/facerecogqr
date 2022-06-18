<?php
include 'config.php';


#Grab input values
$qr_firstname = $_POST["qr_firstname"];
$qr_lastname = $_POST["qr_lastname"];
$qr_studentid = $_POST["qr_studentid"];
$qr_course = $_POST["qr_course"];

$qr_pin =  substr(md5(rand()), 0, 5);


#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `qr_pending-users`");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[1];



#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `qr_pending-users` (`count`, qr_firstname, qr_lastname, qr_studentid, qr_course, qr_pin) 
                     VALUES ('$id', '$qr_firstname','$qr_lastname', '$qr_studentid', '$qr_course', '$qr_pin')";
$rs = mysqli_query($conn, $register);



if ($rs) {
        session_start();
        $_SESSION['id'] = $id;
        header('location: waitingpage.php');
} else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('QR Registration failed. Please try again later.');
        window.location.href='index.php';
        </script>");
}
