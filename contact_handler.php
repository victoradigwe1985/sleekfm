<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if(isset($_POST["submit"])){
            require("connection.php");
            $name=sanitize($connect,$_POST["name"]);
            $email=sanitize($connect,$_POST["email"]);
             $subject=sanitize($connect,$_POST["subject"]);
            $message=sanitize($connect,$_POST["message"]);
         
        
                         $insert="INSERT INTO contact(name,email,subject,message)VALUES('$name','$subject','$message','$email')";
                        if(mysqli_query($connect,$insert)){
                            $msg="Data submitted successfully. Please Print Out this form because it will be require from you during clearance";
                             header("location:contact.php?msg=$msg");
                        }else{
                            $msg="failed to exercute query on the database!";
                            header("location:contact.php?msg=$msg");
                        }
                            }
              
            
            ?>
                      
                        