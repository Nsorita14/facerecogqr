<?php
session_start();
include 'config.php';

$_SESSION["ru_studentid"] = $_GET["ru_studentid"];

$_SESSION["ru_lastname"] = $_GET["ru_lastname"];

$_SESSION["ru_firstname"] = $_GET["ru_firstname"];

$salt = "fr";




if (empty($_GET["ru_studentid"]) && empty($ru_lastname)) {
	header("Location: RegPage.php?error=" . $ru_emptyru_studentid_error . "&ru_username=" . $_SESSION["ru_username"]);
	exit();
} else if (empty($_GET["ru_firstname"])) {
	header("Location: RegPage.php?error=" . $emptyru_lastname_error . "&ru_username=" . $_SESSION["ru_username"]);
	exit();
} else if (empty($ru_lastname)) {
	header("Location: RegPage.php?error=" . $emptyru_firstname_error . "&ru_username=" . $_SESSION["ru_username"]);
	exit();
}

  
$sql = mysqli_query($conn, "SELECT count(*) as total from admin WHERE ru_firstname = '" . $_SESSION["ru_firstname"] . "' and

    ru_lastname = '" . $_SESSION["ru_lastname"] . "' and ru_studentid ='". $_SESSION['ru_studentid'] . "'");

$row = mysqli_fetch_array($sql);

if ($row["total"] > 0) {
	header("Location: Exit.php");
	exit();
} else {
	header("Location: RegPage.php?error=" . $invalidcredentials_error . "&ru_studentid" . $_SESSION["ru_studentid"]);
	exit();
}