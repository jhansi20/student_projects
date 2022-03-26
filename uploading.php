<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Project submission</title>
        <link rel="stylesheet" href="style.css">

        <style>
            * {box-sizing: border-box}
            body {font-family: Verdana, sans-serif; margin:0}
            .mySlides {display: none}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            }


            /* Position the "next button" to the right */
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #b30000;
            font-size: 30px;
            font-family: 'Bradley Hand', cursive;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }


            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
            }
            td {
                font-size: 20px;
            }
            input{
                width: 200px;
                height: 30px;
            }
        </style>
    </head>
    <body>
<div class="header">
    
    <?php include_once("top-nav.php"); ?>
    <div class="content">
   <!---  <div class="slideshow-container" style="width: 60%; float: left;">

   <div class="mySlides fade">
    <img src="images/iot.jpg" style="width:100%">
    <div class="text">EXPLORE PROJECTS FROM VARIOUS FIELDS</div>
    </div>

    <div class="mySlides fade">
    <img src="images/wt.jpg" style="width:100%">
    <div class="text">EXPLORE PROJECTS FROM VARIOUS FIELDS</div>
    </div>

    <div class="mySlides fade">
    <img src="images/cyber_security.jpg" style="width:100%">
    <div class="text">EXPLORE PROJECTS FROM VARIOUS FIELDS</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div><--->
<center>
    <form method="post" action="" enctype="multipart/form-data" style="width: 35%; ">

       <table cellpadding="3" cellspacing="10">
            <tr>
              
                <td><input type="text" required name="sname" placeholder="Student Name" style=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                
                <td><input type="text" required name="cname" placeholder="College Name" ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                
                <td><input type="text" required name="ptitle" placeholder="Project Name"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
                <td>Upload File(less than 6 MB):</td>
                <td><input type="file" required name="fileUpload"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
          </tr>
          <tr>
            <td><input type="text" id="sh" required name="ptype" placeholder="Type of project"></td>
          </tr>
          
          <tr>
                <td></td>
                <td></td>
          </tr>
            <tr>
              
                <td><input  class="sign" type="submit" value="Submit"></td>
            </tr>
        </table>


        <p id="qw"></p>

    </form>
<center>
    </div>
</div>

        
    </body>
</html>
<?php
if(isset($_FILES['fileUpload'])){
      $errors= array(); 
      $file_name = $_FILES['fileUpload']['name']; 
      $file_size =$_FILES['fileUpload']['size']; 
      $file_tmp =$_FILES['fileUpload']['tmp_name']; 
      $file_type=$_FILES['fileUpload']['type']; 
     // $file_ext=strtolower(end(explode('.',$_FILES['fileUpload']['name'])));
      $tmp = explode('.', $file_name);
      $file_ext = end($tmp);
       
      $extensions= array("docx","pdf","doc"); 
       
      if(in_array($file_ext,$extensions)=== false){ 
         $errors[]="extension not allowed, please choose correct file type."; 
      } 
       
      if($file_size > 6291456){ 
         $errors[]='File size must be less than 6 MB'; 
      } 
       
      if(empty($errors)==true){ 
         $servername="localhost";
         $username="root";
         $password="";
         $dbname="group";
         $sname=$_POST['sname'];
         $cname=$_POST['cname'];
         $ptitle=$_POST['ptitle'];
         
         $conn=mysqli_connect($servername, $username, $password, $dbname);

         if(!$conn)
         {
         die("connection failed: ".mysqli_connect_error());
         }
         $sql = "SELECT * FROM projects where pname='$file_name'";  
         $retval=mysqli_query($conn, $sql);  
           
         if($retval->num_rows >0){ 
         echo "File already exists!"; 
   }
         else{
         $sql="INSERT INTO projects(sname,cname,ptitle,pname)
         VALUES('$sname','$cname','$ptitle','$file_name')";
         if(mysqli_query($conn,$sql))
         {
         echo "Project added successfully";
         }

     
         move_uploaded_file($file_tmp,"uploads/".$file_name); 
         
         
         echo "File Uploaded Successfully"; 
      }
      }else{ 
         print_r($errors); 
      } 
    }
?>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>