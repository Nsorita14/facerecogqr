<?php
session_start();
include 'config.php';
include 'error.php';

$_GET["firstname"] = $_GET["firstname"];
$_GET["lastname"] = $_GET["lastname"];
$_GET["mobilenumber"] = $_GET["mobilenumber"];
$_GET["gender"] = $_GET["gender"];
$_GET["purpose_of_visiting"] = $_GET["purpose_of_visiting"];
$salt = "fr";


if (empty($_GET["firstname"]) && empty($lastname)) {
	header("Location: index.php?error=" . $firstname_error . "&username=" . $_GET["username"]);
	exit();
} else if (empty($_GET["lastname"])) {
	header("Location: index.php?error=" . $emptylastname_error . "&username=" . $_GET["username"]);
	exit();
} else if (empty($mobilenumber)) {
	header("Location: index.php?error=" . $emptymobilenumber_error . "&username=" . $_GET["username"]);
	exit();
} else if (empty($gender)) {
	header("Location: index.php?error=" . $emptygender_error . "&username=" . $_GET["username"]);
	exit();
} else if (empty($purpose_of_visiting)) {
	header("Location: index.php?error=" . $emptypurpose_of_visitting_error . "&username=" . $_GET["username"]);
	exit();
}


$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE username = '" . $_GET["lastname"] . "' and 
	firstname = '" . "'");

$row = mysqli_fetch_array($sql);

if ($row["total"] > 0) {
	header("Location: dashboard.php");
	exit();
} else {
	header("Location: index.php?error=" . $invalidcredentials_error . "&username=" . $_GET["username"]);
	exit();
}