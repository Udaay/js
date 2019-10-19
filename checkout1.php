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
if ( !empty( $_GET['prod_price'] ) ) {
	 $productprice = $_GET['prod_name'];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript">
    function validateData(){
      var flag = true;

      var name = document.RegForm.name.value;
      var username=document.RegForm.username.value;
      var mobile=document.RegForm.mobile.value;
      var email=document.RegForm.email.value;
      var password=document.RegForm.password.value;



      if(/^[a-zA-Z ]{2,30}$/.test(name) == false){
        alert('Invalid name')
        flag = false;

      }
      if(/^(\+\d{1,3}[- ]?)?\d{10}$/.test(mobile)== false){
        alert('Invalid Mobile Number')
        flag= false;
      }
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false){
        alert('Invalid Email')
        flag = false;
      }
      if(/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/.test(username) == false){
        alert('Invalid username')
        flag= false;
      }




      return flag;
    }
  </script>
  <style>
  td{
    width:200px;
    padding: 10PX 0PX 10PX 0PX;

  }
  input{
    width:100%;
  }



  </style>
</head>
<body >

<center>
<form name="RegForm" method="post">

      <h1>Enter your Details</h1>

      <table>

        <tr>
        <td><label>First Name</label></td>
        <td><input type="text"  name="fname" ></td>
        </tr>

        <tr>
        <td><label>Last Name</label></td>
        <td><input type="text"  name="lname" ></td>

      </tr>

      <tr>
      <td><label>Address</label></td>
      <td><input type="text"  name="address" ></td>
      <br>
    </tr>

      <tr>
      <td><label>City</label></td>
      <td><input type="text"  name="city" ></td>

    </tr>

    <tr>
      <td><label>Country</label></td>
      <td><input type="text"  name="country"></td>

    </tr>

      <tr>
       <td><label>Zip code</label></td>
       <td><input type="text"  name="zipcode"></td>

     </tr>
     <tr>
       <td><label>Email Address</label></td>
       <td><input type="text"  name="email"></td>

     </tr>
     <tr>
       <td><label>Mobile no.</label></td>
       <td><input type="text"  name="mobile"></td>

     </tr>

     </table>




    </div>
  </form>
  </center>

<center>
  <form>
    <table>

        <th>Product</th>
        <th>Total</th>

        <tr>
            <td>productname</td>
            <td>productprice</td>
        <tr>

          <tr>
              <td>Order Total</td>
              <td>Order price</td>
          <tr>


    </table>

      <button  id="placeorder" class="registerbtn">Place Order</button>
  </form>
</center>

<script>
    document.getElementById('placeorder').onclick=function(){
      alert("your order has been placed Successfully");
      // location.href="finalizeorder.php";
    }

</script>

</body>
</html>
