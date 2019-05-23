<?php
error_reporting(E_ALL);

ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "XcuT8b46urir";
$dbname = "silver_fox";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


$userid=$_POST["userid"];
$pswrd=$_POST["pswrd"];


$sql="select * from users where user_name='$userid' and user_pwd='$pswrd'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    header("Location: signupfail.html"); /* Redirect browser */
  } 
  else {
  header("Location: user-profile.html"); /* Redirect browser */
}


?>