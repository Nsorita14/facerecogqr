<?php
session_start();
include 'config.php';
error_reporting(0);
$selected_user = $_SESSION['pin'];
$check_visitor = $_SESSION['status'];

if ($check_visitor == "visitor"){
    $from = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_logs-visitors` WHERE `qr_pin` = '$selected_user'"));
    if ($from) {
        $_SESSION['name'] = $from['qr_firstname']." ".$from['qr_lastname'];
        $_SESSION['qr_pin'] = $from['qr_pin'];

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('QR Registration approved.');
        window.location.href='visitorsuccess.php';
        </script>");
    }
}
else if ($check_visitor == "school") {
    $from = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `qr_logs-users` WHERE `qr_pin` = '$selected_user'"));
    if ($from) {
        $_SESSION['name'] = $from['qr_firstname']." ".$from['qr_lastname'];
        $_SESSION['qr_pin'] = $from['qr_pin'];

        echo ("<script LANGUAGE='JavaScript'>
        window.alert('QR Registration approved.');
        window.location.href='success.php';
        </script>");
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .load_page {
            margin-top: 25vh;
        }

        h1 {
            font-family: 'Monsserat';
            font-size: 50px;
            font-weight: 100;
        }

        input {
            align-items: center;
            padding: 25px;
            font-size: 25px;
            background-color: #55d5d5;
            border-radius: 20px;

        }

        /*Button Five*/

        input {
            background: #55d5d5;
            color: black;
            transform: perspective(1px) translateZ(0);
            transition: 0.4s;
        }

        input::before {
            background: white;
            clip-path: polygon(50% 0, 50% 0, 50% 50%, 50% 100%, 50% 100%, 50% 50%);
            opacity: 1;
            transition: 0.4s;
        }

        input:hover::before {
            clip-path: polygon(25% -70%, 75% -70%, 120% 50%, 75% 170%, 25% 170%, -20% 50%);
        }

        input:hover {
            color: white;
            box-shadow: 0 0 0 10px rgba(250, 250, 250, 0.1)
        }
    </style>
</head>
<script type="text/javascript">
    function RefreshPage() {
        if (confirm("You are about to refresh the page.")) {
            location.reload();
        }
    }
</script>



<body>

    <div class="load_page">
        <center>
            <img src="img/loading.gif" width="" height="">
            <h1> Please, <b>click </b>refresh button to check for approval.</h1>
            <center> <input type="button" value="Refresh" onclick="RefreshPage()"></center>

        </center>
    </div>

</body>



</html>