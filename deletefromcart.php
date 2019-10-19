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

if ( !empty( $_GET['prod_name'] ) ) {
	 $productname = $_GET['prod_name'];
}

$usercart =$_SESSION['usercart'];
echo $usercart;


$query="DELETE FROM `".$usercart."` where productname='".$productname."'";

if ($result = mysqli_query($connect, $query)) {
    echo "Successfully Deleted";
  }
  else {
    echo "record is not deleted";
  }
echo $quantity;



?>
