<?php
include 'error.php';
?>


<!DOCTYPE html>
<html>
    <head>
    <center>
    <div class=" image">
            <img src="images/logo.png" width="95" height="95">
         </div>
         
        <title>Register Form </title>
        <link rel="stylesheet" type="text/css" href="css/QRstyle.css">
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body class="body">
    
    <div class="container" id="container">
    <div class="form container submit-container">

    <h1 class=" bg-info text-white">QR Logine</h1>


    <form action="loc.php">
          

            <?php if (isset($_GET['error'])) { ?>
                <p class="regerror-msg"><?php echo $_GET['error']; ?></p>
            <?php } ?>

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
                        
                        
                                
                        
                            <select name="course" value="" placeholder="Course">
                                <option disabled="" selected="" value="">Select a Course</option>
                                <option value="ASCT">ASCT</option>
                                <option value="BSCPE">BSCPE</option>
                                <option value="BSIT">BSIT</option>
                                <option value="BSCS">BSCS</option>
                                <option value="BSBA">BSBA</option>
                                <option value="BSA">BSA</option>
                                <option value="BSTM">BSTM</option>
                                <option value="BMMA">BMMA</option>
                                <option value="BSHM">BSHM</option>
                                <option value="TOP">TOP</option>
                                <option value="GAS">GAS</option>
                                <option value="STEM">STEM</option>
                                <option value="Faculty Staff">Faculty Staff</option>
                            </select>
                            
                        
                            
        
                                
                                
                               <select name="gender" value="" placeholder="Gender">
                               <option disabled="" selected="" value="">Gender</option>
                               <option value="f">Female</option>
                               <option value="m">Male</option>
                                    </select>
                     
                                  <button>SUBMIT</button>
                            <form>
                                    <input type="button" value="Go back!" onclick="history.back()">
                        </form>
                                </td>
                            </tr>

                        </form>
                </center>

            </body>

            </html>



