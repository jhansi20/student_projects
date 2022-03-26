<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');
        .adj
        { 
           text-align: center; 
            margin-right:60px ;
            margin-top:-240 ;}
           
        .box{
  height:350px;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 350px;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,0.1);
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
  position:fixed;

           
        }
        .log{
           margin-left: 170px;
           margin-top: 190px;
        }
        .top{
            margin-top: -5px;
    margin-left:175px ;
    font-size: 20px;
    font-style: normal;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    opacity: 1;
        }
        .lo{
            margin-left:270px;
            margin-top:-50px;
            font-size:30px;
        }
        .header{
    width: 100%;
    height: 100%;
    background-image: url(testimonial-background.jpg);
    background-position: center;
    background-size: cover;
    overflow-x: hidden;
    background-attachment:fixed;
}
.testimonials-section {
    background-image: -webkit-linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.7)), url(testimonial-background.jpg);
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.7)), url(testimonial-background.jpg);
    text-align: center;
    background-size: cover;
    background-attachment:fixed;
    color:white;
   
}
.field{
  position:center;
  height: 45px;
  width: 100%;
  display: flex;
  background: rgba(255,255,255,0.94);
}
.field span{
  color: #222;
  width: 40px;
  line-height: 45px;
}
.field input{
  height: 100%;
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  color: #222;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.space{
  margin-top: 16px;
}
.pass-key:valid ~ .show{
  display: block;
}
.pass{
  text-align: left;
  margin: 10px 0;
}
.pass a{
  color: white;
  text-decoration: none;
  font-family: 'Poppins',sans-serif;
}
.pass:hover a{
  text-decoration: underline;
}
.field input[type="submit"]{
  background: #3498db;
  border: 1px solid #2691d9;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.field input[type="submit"]:hover{
  background: #2691d9;
}
.box h1{
    text-align:center;
    color:white;
    font-size:40px;
}

      
    </style>
    </head>
    <body class="header">
        <div >
          
        <form class="adj" action="login1.php" method="POST">
        <div class="box" >
           <!-- <div style="text-align:center;font-size: 40px;font-style: normal;font-weight: bold;color:white ;">Login</div>
            <br><br><br>

            <input type="text" name="email" placeholder="                        email" style="width:250px;height:40px;border:1px solid white ;border-radius: 0.30rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(216, 216, 221, 0.815) ;"><br><br>
            <input type="password" name="password" placeholder="                       password" style="width:250px;height:40px;border:1px solid white ;border-radius: 0.30rem; box-shadow: 0 4px 8px 0 rgba(160, 88, 243, 0.2), 0 6px 20px 0  rgba(216, 216, 221, 0.815) ;"><br><br><br>
            <button style="width:80px;height:50px;border:1px solid rgb(127, 87, 221) ;border-radius: 0.30rem;background:rgb(127, 87, 221);font-weight:bolder ;color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0  rgba(216, 216, 221, 0.815) ;"autocomplete="off" >Login</button>&nbsp;&nbsp;&nbsp;<br><br><br><a href="#" style="text-decoration: none;color:white;">forget password?</a>
        <--><h1>Login</h1>
        <br><br><div class="field">
            
                  <span class="fa fa-user"></span>
                  <input type="text" required placeholder="Email" name="email">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" class="pass-key" required placeholder="Password"name="password" >
                 
               </div>
               <div class="pass">
                  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN" style="background:rgb(127, 87, 221)">
               </div></div>
             
    </body>
</html>