<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>Online Project submission</title>

        <link rel="stylesheet" href="style.css">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 4px;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
th{
  color: white;
  background: #666699;
}
tr:hover {background-color: #bbb;}
</style>
    </head>
    <body>
<div class="header">
    <center>
    
    <?php include_once("top-nav.php"); ?>
    <div class="content">
        
    <form method="post" action="" enctype="multipart/form-data">
        <center>
        <label style="font-size: 24px;">Project Title:</label>&nbsp&nbsp&nbsp
                <input style="width:250px; height:35px; border-radius: 8px;" type="text" name="ptitle" id="ptitle" placeholder="Search project title..." onkeyup="search();">
            <br><br>
                <!-- <input type="submit" value="search"> -->
</form>
    </div>
    <div>
        <center>
            <!-- <div class="card-body" id="notfound" style="display: none;"> 
        <h3 style="color: red; text-align: center;">NO RECORDS FOUND!!</h3> 
        </div> -->
        <table id="projectsTable" align-content:center cellpadding="20" border="2px solid" style= "background-color: #EDE5EF; color: #000; margin: 0 auto; width: 1000px; height: 100px;">
            <tr>
                <th>Student</th>
                <th>College</th>
                <th>Project Title</th>
                <th>Action</th>
            </tr>
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
       <tr>
        <td align="center"><?php echo $row["sname"]; ?></td>
        <td align="center"><?php echo $row["cname"]; ?></td>
        <td align="center"><?php echo $row["ptitle"]; ?></td>
        <td align="center"><button onclick="showFile('<?php echo $row["ptitle"]; ?>');" class="button">View</button></td></tr>";
  <?php }
} 
$conn->close();
?>
</table> 
</div>
</div> 
</body>
</html>
<script> 
function search() { 
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue; 
  input = document.getElementById("ptitle"); 
  filter = input.value.toUpperCase(); 
  table = document.getElementById("projectsTable"); 
  tr = table.getElementsByTagName("tr"); 
 
  // Loop through all table rows, and hide those who don't match the search query 
  for (i = 0; i < tr.length; i++) { 
    td = tr[i].getElementsByTagName("td")[2]; 
    if (td) { 
      txtValue = td.textContent || td.innerText; 
      if (txtValue.toUpperCase().indexOf(filter) > -1) { 
        tr[i].style.display = ""; 
      } else { 
        tr[i].style.display = "none"; 
      } 
    } 
  } 
}

function showFile(x)
{
    window.open('uploads/'+x+'.pdf');
} 
</script>