<?php

// Varibals
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Motors_control"; //Scema name
$motor1=$_POST["motor1"];
$motor2=$_POST["motor2"];
$motor3=$_POST["motor3"];
$motor4=$_POST["motor4"];
$motor5=$_POST["motor5"];
$motor6=$_POST["motor6"];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
$sql=mysqli_query($conn,"select * from motors ORDER BY id DESC LIMIT 1 ");
$row=mysqli_fetch_row($sql);
    echo " motor 1: ".$row[0]."  <br/> ". " motor 2: ".$row[1]."   <br/>". "motor 3: ".$row[2]."  <br/> " ." motor 4: ".$row[3]."  <br/> " ." motor 5: ".$row[4]. "  <br/> " ." motor 6: ".$row[5]." <br/>";   

?>