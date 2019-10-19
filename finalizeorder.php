<?php
  session_start();
$server = "localhost:3306";
$username ="root";
$password ="";
$database="auction";

$connect = mysqli_connect($server,$username,$password,$database);
if(!$connect){
    die("Error : " . $con->connect_error);
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$country = $_POST["country"];
$zipcode = $_POST["zipcode"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

$useraddress =$_SESSION['useraddress'];
echo $usercart;

$query1 = "INSERT into`".$useraddress."`(fname,lname,address,city,country,zip,mobile,email) values('$fname','$lname','$address','$city','$country','$zipcode','$email','$mobile')";

if($result1 = mysqli_query($connect, $query1))
  {
      echo "Order Successfully Placed";
  }
  else{
    echo "error";
  }
