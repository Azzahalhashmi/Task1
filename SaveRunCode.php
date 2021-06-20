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
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); }

// SAVE Button
if(isset($_POST['save'])){
$sql =("insert into motors (motor1,motor2,motor3,motor4,motor5,motor6,run) values ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6','0')"); 
if ($conn->query($sql) === TRUE){
    echo "Data record added successfully"; }
    else {
    echo "ERROR: " . $sql . "<br>" . $conn->error; } }

// RUN Button
else if(isset($_POST['run'])){
    $sql =("UPDATE motors SET run='1' ORDER BY id DESC LIMIT 1");
    if ($conn->query($sql) === TRUE) {
    echo "Run status changed to ON ";
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}
}
