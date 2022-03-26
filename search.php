<?php
         $servername="localhost";
         $username="root";
         $password="";
         $dbname="group";  
         $project=$_POST['ptitle'];   
         $conn=mysqli_connect($servername, $username, $password, $dbname);
         if(!$conn)
         {
         die("connection failed: ".mysqli_connect_error());
         }
         $sql="SELECT * from projects where ptitle='$project'";

         $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "Student name: " . $row["sname"]. " -college Name: " . $row["cname"]. "Project title: " . $row["ptitle"]. "Project name: " . $row["pname"] . "<br>";
              }
            } 
?>