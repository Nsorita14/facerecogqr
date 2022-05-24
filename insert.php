<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "fr";

$con = new mysqli($host, $user, $pass, $db);
if (!$con) {
    echo "There are some problem while connecting to database";
}

$studentnumber = $_GET['studentnumber'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$gender = $_GET['gender'];


$count_id = mysqli_query($con, "SELECT COUNT(*) FROM form;");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;


$qry = "REPLACE INTO `form` (`id`, `studentnumber`, `firstname`, `lastname`, `gender`) VALUES ('$id', '$studentnumber', '$firstname', '$lastname', '$gender')";
$insert = mysqli_query($con, $qry);
if (!$insert) {
    echo $insert;
    echo "There are some problem while inserting data";
}
else{
    echo "Data Inserted!";
}
?>