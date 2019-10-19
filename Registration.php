<?php

$server ="localhost";
$username="root";
$password="";
$database="auction";

$connect=mysqli_connect($server,$username,$password,$database);
if(!$connect){
    die("Error : " .mysqli_connect_error());
}

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$mobilenumber=$_POST["mobilenumber"];

$query = "INSERT into registration(username,email,password,mobno)values('$username','$email','$password','$mobilenumber')";
if(mysqli_query($connect, $query))
{
  // echo "Inserted successfully";
}
else {
  echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);
}

$basetablename="cart";
$tablename=$username.$basetablename;

$cart="CREATE TABLE`".$tablename."`(productname varchar(20),image varchar(200),price int,quantity int)";
if(mysqli_query($connect, $cart))
{
  // echo "Table created successfully";
}
else {
  echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);
}

$basetablename1="order";
$tablename1=$username.$basetablename1;

$order="CREATE TABLE`".$tablename1."`(productname varchar(20),image varchar(200),price int,quantity int)";
if(mysqli_query($connect, $order))
{
  // echo "Table created successfully";

}
else {
  echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);
}


$basetablename2="address";
$tablename2=$username.$basetablename2;

$address="CREATE TABLE`".$tablename2."`(fname varchar(10),lname varchar(10),address varchar(20),city varchar(15),country varchar(15),zip int,mobile int,email varchar(15))";
if(mysqli_query($connect, $address))
{
  // echo "Table created successfully";
  echo "Registered successfully";
}
else {
  echo "ERROR: Could not able to execute $query. " . mysqli_error($connect);
}


 ?>
