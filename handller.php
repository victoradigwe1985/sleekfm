<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if(isset($_POST["submit"])){
            require("connection.php");
            $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
            $registered_on=DATE("y-m-d h:i:s");
            $firstname=sanitize($connect,$_POST["firstname"]);
            $subject=sanitize($connect,$_POST["subject"]);
            $message=sanitize($connect,$_POST["message"]);
            $email=sanitize($connect,$_POST["email"]);
            
          
                        $insert="INSERT INTO contact_us(first_name,subject,message,email)VALUES('$firstname','$subject','$message','$email')";
                        if(mysqli_query($connect,$insert)){
                            $msg="Your message has been sent. Thank you!";
                             header("location:contact.php?msg=$msg");
                        }else{
                            $msg="failed to exercute query on the database!";
                             header("location:contact.php?msg=$msg");
                        }
                            }
           
            
            ?>
