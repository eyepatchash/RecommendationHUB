
<?php
$host = "localhost";
$database = "register";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
$email=$_POST['email'];
$pass=$_POST['pass'];

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

 
$sql = "INSERT INTO signups( `email`, `password`)VALUES('$email', '$pass')";
if (mysqli_query($conn, $sql)) {
    
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('./images/sign.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  
  <div class="middle">
    <h1>YOU Signed UP mate</h1>
    <hr>
    
  </div>
  
</div>



</body>
</html>

