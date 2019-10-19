<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="auction";
  $connect=mysqli_connect($server,$username,$password,$database);
  if(!$connect){
      die("Error : " . $con->connect_error);
  }

  if(isset($_POST['upload']))
  {
    $productname = $_POST["productname"];
    $startingprice = $_POST["startingprice"];
    $quantity=$_POST["quantity"];
    $details=$_POST["details"];
    $warrantyperiod=$_POST["warrantyperiod"];
    $productid=$_POST["productid"];
    $image =$_FILES['image']['name'];


    $target = "images/".basename($image);

  	$sql = "INSERT INTO product_insert (productname,startingprice,quantity,details,warrantyperiod,productid,image) VALUES ('$productname','$startingprice','$quantity','$details','$warrantyperiod','$productid','$image')";
  	// execute query
  	mysqli_query($connect, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  }



?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>

  <style>


  td {
  padding: 15px;
    }

  input{
    border: 2px solid black;
    border-radius: 8px;
  }
  textarea{
    border: 2px solid black;
    border-radius: 8px;

  }


  </style>

  <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
  </script>
  <script>
  $(function(){
    $("#header").load("header.html");
    $("#footer").load("footer.html");
  });
  </script>
<body>
<div id="header"></div>
  <center>
    <h1>Insert product Details</h1>
    <form method="post" action="adminform.php" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Product Id:</td>
          <td><input type="text" name="productid" id="productid" maxlength="10" size="25"></td>
        </tr>

        <tr>
          <td>Product Name:</td>
          <td><input type="text" name="productname" id="productname" maxlength="20" size="25"></td>
        </tr>

        <tr>
          <td>Starting Price:</td>
          <td><input type="text" name="startingprice" id="startingprice" size="25"></td>
        </tr>

        <tr>
          <td>Quantity:</td>
          <td><input type="text" name="quantity" id="quantity" size="25"></td>
        </tr>

        <tr>
          <td>Details:</td>
          <td><textarea name="details" id="details"></textarea></td>
        </tr>



        <tr>
          <td>Warranty Period:</td>
          <td><input type="text" name="warrantyperiod" id="warrantyperiod" size="25"></td>
        </tr>

        <tr>
          <td>Choose image:</td>
          <td><input type="file" name="image" id="image"></td>
        </tr>

      </table>

      <input type="submit" name="upload" value="Upload"></input>
    </form>
  </center>
</body>
</html>
