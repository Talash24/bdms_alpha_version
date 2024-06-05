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
/* private css */
 .search-section{
        margin-left: 400px;
        margin-top: 100px;   
        width:600px;
 }
 .search-bar input { height:30px; margin-bottom: 10px; }

        .search-bar input[type="text"] { width: 40%; margin-right: 10px; }

        #btn {
           margin-top: 20px;
           padding: 10px 20px;
           background-color: #4CAF50;
           color: white;
           border: none;
           cursor: pointer;
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
 <!-- private html  -->
          <div class="search-section">
             <h3>Search Blood donor </h3>
              <form method= "GET" action="" class="search-bar ">
                   <input type="text" name="blood_type" id="blood_type" value="A- " required >
                   <input type="text" name="region" id="" value="Khustia " reqiured >
                   <button type="submit" id="btn">Search</button>

              </form>
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
          if (isset($_GET['blood_type']) && isset($_GET['region'])) {
                $blood_type = $_GET['blood_type'];
                $region = $_GET['region'];

                $sql = "SELECT id, name, blood_type, region, contact, created_at FROM donors WHERE blood_type = '$blood_type' AND region = '$region'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='card'>
                                <h3>{$row['name']}</h3>
                                <p><strong>Blood Type:</strong> {$row['blood_type']}</p>
                                <p><strong>Region:</strong> {$row['region']}</p>
                                <p><strong>Contact:</strong> {$row['contact']}</p>
                                <p><strong>Registered On:</strong> {$row['created_at']}</p>
                                <br>
                              </div>";
                    }
                } else {
                    echo "<p>No data found</p>";
                }
            }

            $conn->close();
            ?>
          </div>
        

</body>
</html>