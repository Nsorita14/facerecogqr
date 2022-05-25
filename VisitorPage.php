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

    <h1 class=" bg-info text-white">Login Visitor</h1>


    <form action="loc.php">


            <?php if (isset($_GET['error'])) { ?>
                <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <img src="logo.png" width="90px" height="90px"> </img>
            <span>Make sure all the information are correct.</span>
            
                   <form action="insert2.php">

                      
                            <?php if (isset($_GET['error'])) { ?>
     	                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                             <?php } ?>



                            

                                    <input type="firstname" name="firstname" value="<?php 
                                 if (empty($_GET['firstname'])) {
                                     echo "";
                                 }
                                 else{
                                     echo $_GET['firstname'];
                                 }?>" placeholder="First Name">
                             
                             

                                <td>
                                    <input type="lastname" name="lastname" value="<?php 
                                 if (empty($_GET['lastname'])) {
                                     echo "";
                                 }
                                 else{
                                     echo $_GET['lastname'];
                                 }?>" placeholder="Last Name">
                             

                           
                          
                                <td>
                                    <input type="mnumber" name="mnumber" value="<?php 
                                 if (empty($_GET['mnumber'])) {
                                     echo "";
                                 }
                                 else{
                                     echo $_GET['mnumber'];
                                 }?>" placeholder="Mobile Number">
                             
                            <br>
                                    <button>SUBMIT</button>
                                    <p>Are you a Registered User?  <a href="RegPage.php">Log in</a></p>
                                 </td>
                            </tr>

                        </form>
                </center>

            </body>

            </html>



