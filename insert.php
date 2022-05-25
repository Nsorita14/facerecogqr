<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "fr";

$con = new mysqli($host, $user, $pass, $db);
if (!$con) {
    echo "There are some problem while connecting to database";
}

$ru_studentid = $_GET['ru_studentid'];
$ru_firstname = $_GET['ru_firstname'];
$ru_lastname = $_GET['ru_lastname'];


$count_id = mysqli_query($con, "SELECT COUNT(*) FROM rgstrd_users;");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;


$qry = "REPLACE INTO `rgstrd_users` ( `ru_studentid`, `ru_firstname`, `ru_lastname`) VALUES ('$ru_studentid', '$ru_firstname', '$ru_lastname')";
$insert = mysqli_query($con, $qry);
if (!$insert) {
    echo $insert;
    echo "There are some problem while inserting data";
}
else{
    echo "Data Inserted!";
}
?>