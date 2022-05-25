<?php
session_start();
include 'config.php';
include 'error.php';

$_SESSION["ru_studentid"] = $_GET["ru_studentid"];
$password = $_GET["ru_lastname"];
$salt = "fr";



if (empty($_SESSION["ru_studentid"]) && empty($ru_email)) {
	header("Location: RegPage.php?error=" . $emptyuserpass_err . "&ru_studentid=" . $_SESSION["ru_studentid"]);
	exit();
} else if (empty($_SESSION["ru_studentid"])) {
	header("Location: RegPage.php?error=" . $emptyusername_err . "&ru_studentid=" . $_SESSION["ru_studentid"]);
	exit();
} else if (empty($ru_email)) {
	header("Location: RegPage.php?error=" . $emptypassword_err . "&ru_email=" . $_SESSION["ru_email"]);
	exit();
}


$sql = mysqli_query($conn, "SELECT count(*) as total from rgstrd_users WHERE ru_studentid = '" . $_SESSION["ru_studentid"] . "' and 
	ru_email= '" . $_SESSION["ru_email"] . "'");

$row = mysqli_fetch_array($sql);

if ($row["total"] > 0) {
	header("Location: Exit.php");
	exit();
} else {
	header("Location: RegPage.php?error=" . $invalidcredentials_err . "&studentid" . $_SESSION["ru_studentid"]);
	exit();
}
