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
            $lastname=sanitize($connect,$_POST["lastname"]);
            $username=sanitize($connect,$_POST["username"]);
            $password=sanitize($connect,hasher($_POST["password"]));
            $confirm_password=sanitize($connect,hasher($_POST["confirm_password"]));
           
     
                        $insert="INSERT INTO admin_account(first_name,last_name,username,password,confirm_password)VALUES('$firstname','$lastname','$username','$password','$confirm_password')";
                        if(mysqli_query($connect,$insert)){
                            $msg="Data submitted successfully";
                             header("location:admin_form.php?msg=$msg");
                        }else{
                            $msg="failed to exercute query on the database!";
                             header("location:admin_form.php?msg=$msg");
                        }
                        }
                        
            ?>
