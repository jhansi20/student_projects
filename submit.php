<?php  
include('connect.php'); 
if(!empty($_POST)) { 
   
  $sname = $_POST['sname']; 
  $cname = $_POST['cname']; 
     $ptitle = $_POST['ptitle']; 
  $pname = "hello"; 
  $sql = "INSERT INTO projects (sname,cname,ptitle,pname) VALUES ('$sname','$cname','$ptitle','$pname')"; 
     mysqli_query($conn, $sql); 
} 
 
?>