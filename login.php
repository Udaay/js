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



$username = $_POST["username"];
$password = $_POST["password"];
$query = "Select * from registration where username='$username' AND password='$password'";

if($result = mysqli_query($connect, $query))
  {
    $count  = mysqli_num_rows($result);
    echo "$count <br>";
    if($count==0)
    {
    echo "Invalid Username or Password!";
    }
    else
    {
    echo "You are successfully authenticated!";
    $_SESSION['username']=$username;
    $_SESSION['usercart']=$username."cart";
    $_SESSION['userorder']=$username."order";
    $_SESSION['useraddress']=$username."address";
    include 'index.php';
    }
  }

?>

<script>


</script>
