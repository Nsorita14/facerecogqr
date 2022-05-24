<?php
include 'error.php';
?>


<!DOCTYPE html>
<html>
    <head>
    <center>
        <title>Visitor Form </title>
        <link rel="stylesheet" type="text/css" href="css/QRRstyle.css">
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body class="body">

    <div class="container" id="container">
    <div class="form-container submit-container">

    <form action="loc.php">
            <h1>Registration for visitor</h1>

            <?php if (isset($_GET['error'])) { ?>
                <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <span>Make sure all the information are correct.</span>
            
                    <form action="insert2.php">

                        <table>
                            <tr>
                            <?php if (isset($_GET['error'])) { ?>
     	                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                             <?php } ?>
                            </tr>

                                <tr>
                                <td>First Name:</td>
                                <td>
                                    <input type="firstname" name="firstname" value="<?php 
                                 if (empty($_GET['firstname'])) {
                                     echo "";
                                 }
                                 else{
                                     echo $_GET['firstname'];
                                 }?>" placeholder="First Name">
                             
                                </td>
                            </tr>

                            <tr>
                                <td>Last Name:</td>
                                <td>
                                    <input type="lastname" name="lastname" value="<?php 
                                 if (empty($_GET['lastname'])) {
                                     echo "";
                                 }
                                 else{
                                     echo $_GET['lastname'];
                                 }?>" placeholder="Last Name">
                             
                                </td>
                            </tr>

                           
                            <tr>
                                <td>Phone:</td>
                                <td>
                                    <input type="mnumber" name="mnumber" value="<?php 
                                 if (empty($_GET['mnumber'])) {
                                     echo "";
                                 }
                                 else{
                                     echo $_GET['mnumber'];
                                 }?>" placeholder="Mobile Number">
                             
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <button>SUBMIT</button>
                            <form>  
                            <input type="button" value="Go back!" onclick="history.back()">
                            </form>
                                 </td>
                            </tr>
                        
                        </table>

                        </form>
                </center>

            </body>

            </html>



