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


$query="SELECT productname,startingprice,quantity,image,productid FROM product_insert where productname='".$productname."'";

if ($result = mysqli_query($connect, $query)) {
    while($row = $result->fetch_assoc()) {
      $productname =  $row["productname"];
      $startingprice =  $row["startingprice"];
      $quantity =  $row["quantity"];
      $image =  $row["image"];

    }
  }
echo $quantity;

$query1 = "INSERT into`".$usercart."`(productname,image,price,quantity) values('$productname','$image','$startingprice','$quantity')";

if($result1 = mysqli_query($connect, $query1))
  {
      echo "successfully Inserted";
  }
  else{
    echo "error";
  }

?>
