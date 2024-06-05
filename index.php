<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">
 <style>

/* universal css */
*{
   margin:0px;
   padding:0px;
}
  .navbar_start {
   color: #d91e36;
    text-decoration: none;
    margin-left:50px;
  
  }

  .anton-regular {
  font-family: "Anton", sans-serif;
  font-weight:400;
  font-style:normal;
}
.body{
 background-color: #f9f9f9;
}
.navbar{
 display:flex;
 justify-content:space-around;
 align-items: center;
 background-color:#f8edeb;
 height:60px;
 margin: 30px 60px;
 border-radius: 20px;
}
.navbar_menu{
   display: flex;
   gap:5px;
     list-style: none;
     margin-left: 100px;

 
}
.container{
  width:100%;
}
.navbar-item{
    margin-left:40px;

}
.navbar-link{
    color:#011627;
    text-decoration:none;

}
.navbar-link:hover{
      color:#d91e36;
}
/* univeral css*/

/* about section  */
.mainpage{
    display: flex;
    justify-content:space-between;
    margin-top: 100px;
    margin-left:50px;

}
.heading{
    color:#DB4C00;
    font-size:24px;
    margin-bottom:10px;
}
  .about {
    background-color: #ffffff;
    padding: 20px;
    max-width: 500px;
    margin: 20px;
    margin-left: 50px;
    border-radius: 10px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.about p {
    font-size: 16px;
    color: #333333;
    line-height: 1.6;
}
.image{
  margin-right:80px;
}
 </style>
</head>

<body>
  <!-- universal html -->
 <div class="container">
  <div class="navbar">
   <a href="#" class="navbar_start anton-regular ">BloodHub </a>
   <ul class="navbar_menu">
    <li class="navbar-item"> <a href="index.php " class="navbar-link">Home</a></li>
    <li class="navbar-item"> <a href="register.php " class="navbar-link">Register</a></li>
    <li class="navbar-item"> <a href="request.php " class="navbar-link">Request</a></li>
    <li class="navbar-item"> <a href="search.php " class="navbar-link">Search </a></li>
    <li class="navbar-item"> <a href="admin.php " class="navbar-link">admin</a></li>

      
   </ul>
  </div>
  <!-- universla html -->
          <div class="mainpage">
                <div class="about">
                       <h2 class="heading">About Us</h2>
                       <p>Welcome to BloodHub, your trusted partner in lifesaving blood management solutions. Our mission is to streamline and enhance the blood donation and distribution process, ensuring that every drop counts towards saving lives. At BloodHub, we believe in the power of community and the vital role that blood donors play in healthcare</p>
                </div>
                <div class="image">
                     <img src="https://i.ibb.co/Ctw7YKf/e26ea1d4fe174d643225334d6f4e058b.jpg" alt="" srcset="">
                </div>
          </div>
   <!-- #upcomin event !-->
   <div class="event">
    
   </div>
 </div>
</body>

</html>