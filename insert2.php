<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "fr";

$con = new mysqli($host, $user, $pass, $db);
if (!$con) {
    echo "There are some problem while connecting to database";
}

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$mnumber = $_GET['mnumber'];


$count_id = mysqli_query($con, "SELECT COUNT(*) FROM form2;");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;

$register = "REPLACE INTO `form2` (id, firstname, lastname, mnumber) 
VALUES ('$id', '$firstname', '$lastname', '$mnumber')";
$rs = mysqli_query($con, $register);

$qry = "REPLACE INTO `form2` (`id`, `firstname`, `lastname`, `mnumber`) VALUES ('$id', '$firstname', '$lastname', '$mnumber')";
$insert = mysqli_query($con, $qry);
if (!$insert) {
    echo $insert;
    echo "There are some problem while inserting data";
}
else{
    echo "Data Inserted";
}
?>