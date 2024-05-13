<?php

include_once("connection.php");

session_start();

if(isset($_POST['submit'])){
    $username=$_POST["username"];
     $password=$_POST["password"];
     
     $query="SELECT *FROM admin_account WHERE username='$username' AND password='$password'";
     
     $result=mysqli_query($connect,$query);
     
     if(mysqli_num_rows($result)==1){
         while($row=mysqli_fetch_array($result)){ 
                $_SESSION['first_name']= $row["first_name"];
                 $_SESSION['middle_name']= $row["middle_name"];
                $_SESSION['surname']= $row["surname"];
                $_SESSION['username']= $row["username"];

         
              

           
         echo "<script>alert('you are good to go')</script>";
    }
 
         $role="SELECT *FROM admin_account WHERE username='$username' AND password='$password'";
         
         $roles=mysqli_query($connect,$role);
         
         $row=mysqli_fetch_array($roles);
         $username=$row['username'];
         
        if($row['username']=="$username"){ 
             $_SESSION['username']=$username;

             header("location:dashboard.php?username='$username'");
         }
     }else{
         ?><script>alert('Invalid Account');window.location='login_admin.php';</script><?php 
     }
}
?>