<?php
include 'error.php';
?>


<!DOCTYPE html>
<html>
    <head>
    <center>
        <title>Register Form </title>
        <link rel="stylesheet" type="text/css" href="css/QRstyle.css">
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body class="body">
    
    <div class="container" id="container">
    <div class="form container submit-container">

    <h1 class=" bg-info text-white">Login User</h1>


    <form action="loc.php">
          

            <?php if (isset($_GET['error'])) { ?>
                <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <img src="logo.png" width="90px" height="90px"> </img>
            <span>Make sure all the information are correct.</span>

                <form action="insert.php">

                            
                            <?php if (isset($_GET['error'])) { ?>
     	                    <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
                             <?php } ?>
                            

                    
                                
                                
                                    <input type="studentnumber" name="studentnumber" value="<?php 
                                if (empty($_GET['studentnumber'])){
                                        echo "";
                                    } 
                                    else{
                                        echo $_GET['studentnumber'];
                                        }?>" placeholder="Student ID">
                            
                    
                            
                                <td>
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
                                        echo"";
                                        } 
                                else{
                                        echo $_GET['lastname'];
                                        }?>" placeholder="Last name">
                        
        
                     
                                  <button>SUBMIT</button>
                           <br>
                                <p>Are you a visitor?<a href="VisitorPage.php">Create a new account</a></p>
                            <br>
                                </td>
                            </tr>

                        </form>
                </center>

            </body>

            </html>



