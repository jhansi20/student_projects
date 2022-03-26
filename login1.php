<?php

$conn=new mysqli("localhost","root","","group");
if(!$conn)
   {
       echo "connect failed";
   }
 if($_POST)
 {
     $email=$_POST['email'];
     $password=$_POST['password'];
     
    $sql="select password from login where email='$email'";
    $result=$conn->query($sql);
    if(!$result)
    {
        echo "error";
    }
    $storedpassword=$result->fetch_assoc()['password'];
    if($storedpassword==$password)
    {  
        header('location:index.php');
    }
    else{
       echo '<script>alert("incorrect password");</script>';
    }
    
 }
 ?>