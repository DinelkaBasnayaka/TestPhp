<?php

$host="localhost";
$user="root";
$password="";
$db= "demo";
$conn =  new mysqli($host, $user, $password ,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];
    echo $uname;

    
$sql="SELECT * From loginform";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "number of rows: " . $result->num_rows;      }

}
    

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form in Design</title>

<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
    <div class="container">
       <img src="/images/Official_Gta_V_Artwork_Franklin_And_Chop.jpg"/>
       <form method="POST" action="#">
          <div class="form_input">
            <input types="text" name="username" placeholder="enter your user name "/>
          </div>
          <div class="form_input">
               <input type="password" name="password" placeholder="enter your password"/>
          </div>
          <input type="submit" name="submit" value="Login" class="btn-login"/>
       </form>    
    </div>      
</body>
</html>