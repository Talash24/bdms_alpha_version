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
  * {
   margin: 0px;
   padding: 0px;
  }

  .navbar_start {
   color: #d91e36;
   text-decoration: none;
   margin-left: 50px;

  }

  .anton-regular {
   font-family: "Anton", sans-serif;
   font-weight: 400;
   font-style: normal;
  }

  .body {
   background-color: #f9f9f9;
  }

  .navbar {
   display: flex;
   justify-content: space-around;
   align-items: center;
   background-color: #f8edeb;
   height: 60px;
   margin: 30px 60px;
   border-radius: 20px;
  }

  .navbar_menu {
   display: flex;
   gap: 5px;
   list-style: none;
   margin-left: 100px;


  }

  .container {
   width: 100%;
  }

  .navbar-item {
   margin-left: 40px;

  }

  .navbar-link {
   color: #011627;
   text-decoration: none;

  }

  .navbar-link:hover {
   color: #d91e36;
  }

  /* universal cee */
  /* private csss */
  /*
  .parent_from{
    display:flex;
    justify-content:center;
    padding:}
*/
.from-seciton{
 background-color: #ffffff;
    padding: 20px;
    max-width: 500px;
    height: 300px;
    margin: 20px;
    margin-left: 400px;
    border-radius: 10px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
    
}
   input,select{
     width:100%;
     height:20px;
   }
  label {
   display: block;
   margin-bottom:5px;
   margin-top:5px;
  }
  #btn{
         margin-top:10px;
         padding:10px 20px;
         background-color:#4CAF50;
         color:white;
         border:none;
  }
  #btn:hover { 
   background-color: #45a049;
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

  <!-- private html -->
     

   <div class="from-seciton">
    <h2>Register as a Blood donor : </h2>
    <form action="" method="POST">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required>
    <label for="blood_type">Blood_type : </label>

    <select name="blood_type" id="blood_type">
     <option value="A+">A+</option>
     <option value="B+">B+</option>
     <option value="A-">A-</option>
     <option value="O+">O+</option>
     <option value="AB+">AB+</option>
     <option value="AB-">AB-</option>

    </select>
    <label for="region">Region : </label>
    <input type="text" name="region" id="region" required>
    <label for="contact">Contact : </label>
    <input type="text" name="contact" id="contact ">
    <button id="btn">submit</button>

    </form>
    







   </div>
  
  <!-- phpconnect -->
  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "blood_donors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $blood_type = $_POST['blood_type'];
    $region = $_POST['region'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO donors (name, blood_type, region, contact) VALUES ('$name', '$blood_type', '$region', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
     

     

</body>

</html>