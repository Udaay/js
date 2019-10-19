<?php

$server     = "localhost:3306";
$username   = "root";
$password   = "";
$database   = "auction";

$connect = mysqli_connect($server, $username, $password, $database);

if(!$connect){
   die("Error : " . $connect>connect_error);
}

$sql="SELECT image FROM product_insert";
$stmt = $connect->query($sql);

$stmt->bindParam(1,$_GET['productid']);
$stmt->execute();

$num=$stmt->rowcount();

if($num)
{
  $row=$stmt->fetch(PDO::fetch_assoc);
  header("Content-type:image/png");
  print $row['data'];
  exit;
}
else {
  echo "hgdfyu";
}



 ?>
