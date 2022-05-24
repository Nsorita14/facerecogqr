<?php
include 'error.php';

$studentnumber = $_GET['studentnumber'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$gender = $_GET['gender'];

if (empty($studentnumber)){
    header("Location:RegPage.php?error=".$studentnumber_error."&firstname=".$firstname."&lastname=".$lastname."&gender=".$gender);
            exit();
    }
else if(empty($firstname)) {
    header("Location:RegPage.php?error=".$studentnumber_error."&firstname=".$firstname."&lastname=".$lastname."&gender=".$gender);
            exit();
    }
else if(empty($lastname)) {
    header("Location:RegPage.php?error=".$studentnumber_error."&firstname=".$firstname."&lastname=".$lastname."&gender=".$gender);
            exit();
    }
else if(empty($gender)) {
    header("Location:RegPage.php?error=".$studentnumber_error."&firstname=".$firstname."&lastname=".$lastname."&gender=".$gender);
            exit();
}
else {
    header("Location:insert.php");
            exit();

}
?>