<?php

$conn=new mysqli("localhost","root","","group");
if(!$conn)
{
    echo "connect failed";
}
 $uname=$_POST['uname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];

 $sql="insert into login values('$uname','$email','$password','$cpassword')";
 $result=$conn->query($sql);
 if(!$result)
 {
    echo "error";
 }
   
    else{
        echo '<script>alert("sucessfully registered");</script>';
    }
?>