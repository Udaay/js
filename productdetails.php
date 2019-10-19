<?php
session_start();

$server     = "localhost:3306";
$username   = "root";
$password   = "";
$database   = "auction";

$connect = mysqli_connect($server, $username, $password, $database);

if(!$connect){
    die("Error : " .mysqli_connect_error());
}


if ( !empty( $_GET['prod_name'] ) ) {
	 $productname = $_GET['prod_name'];
}

$query="SELECT productname,startingprice,quantity,details,warrantyperiod,image,productid FROM product_insert where productname='".$productname."'";
$result = $connect->query($query);

if ($result = mysqli_query($connect, $query)) {
    while($row = $result->fetch_assoc()) {
      $productname =  $row["productname"];
      $startingprice =  $row["startingprice"];
      $quantity =  $row["quantity"];
      $details =  $row["details"];
      $warrantyperiod =  $row["warrantyperiod"];
      $image =  $row["image"];
      $productid =  $row["productid"];
      echo $productname;
      echo $image;
      //
      // session_unset();
      //
      // session_destroy();


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <style>

      .productmargin{
        margin:100px 0px 0px 150px;
      }
      #quantitybox{
        width: 50px;
        text-align: center;
      }
      #prodetail{
        margin:100px 0px 0px 50px;
      }
      .lipadding{
        float:left;
        padding:10px;
      }
      @media screen and (max-width: 600px) {

        .productmargin{
          margin:100px 0px 0px 40px;
        }
      }


      /* -------------------------------HEADERR-------------------- */
      .searchinput{
        width: 300px;
        margin-left: 250px;

      }
      .navcolour2{
        background-color: #11B683;
      }
      #dropmenu1{
        margin-left: 87%;
      }

      @media screen and (max-width: 600px) {

        .searchinput{
          width: 300px;
          margin-left: 0px;

        }
      }

      </style>
</head>

<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script>
$(function(){
  // $("#header").load("header.php");
  $("#footer").load("footer.html");
});
</script>
    <body>


      <?php

      if (isset($_SESSION['username'])) {
          $name_of_user= $_SESSION['username'];
      }
      else {
        $name_of_user= "Login";
      }

      ?>
      <nav class="navbar navbar-expand-lg navcolour2">



    <div class="mx-auto order-0">
            <input type="text" class="form-control searchinput" placeholder="Search">
    </div>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <li class="nav-item">
          <a  class="nav-link" href="adminform.php">Adminlogin</a>
        </li>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >My Account</a>
        <div class="dropdown-menu" id="dropmenu1">
          <a class="dropdown-item" href="#">My Profile</a>
          <a class="dropdown-item" href="./cart.php">My Cart</a>
          <a class="dropdown-item" href="./logout.php">Logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a id="login" class="nav-link" href="login.html"><?php echo $name_of_user; ?></a>
      </li>

    </ul>
  </nav>



      <div class="row">
        <div id="divimage" >
          <a  href="pic7.jpg"><img id="img1" class="productmargin"style="width:450px; height:450px " src="./images/<?php echo $row["image"]; ?>" alt=""></a>
        </div>
        <div id="prodetail">
          <h3 id="product_name"><?php echo $row["productname"]; ?></h3>
          <br>
          <h4>Price: <span id="product_price"><?php echo $row["startingprice"]; ?></span></h4>
          <br>
          <label>Qty:</label>
          <input type="number" id="quantitybox" value="<?php echo $row["quantity"]; ?>">
          <br>
          <br>
          <button id="addtocart" class="btn btn-lg btn-success" type="submit">Add to Cart</button>
          <br>
          <br>
          <button id="buybutton" class="btn btn-lg btn-success" type="submit">Buy</button>
          <div>Your order will be delivered within 2days</div>

        </div>
      </div>

      <div class="productmargin">
        <div>DETAILS</div>
        <br>

            <div>
              <div>Chilly weather is just an excuse to throw on your toasty, hand</div>
              <ul>
                <li> Brown hoodie with black detail.</li>
                <li>Pullover.</li>
                <li>Adjustable drawstring hood.</li>
              </ul>
            </div>



            <div>Warranty</div>
            <br>

                <div>
                  <div>Chilly weather is just an excuse to throw on your toasty, hand</div>
                  <ul>
                    <li> Brown hoodie with black detail.</li>
                    <li>Pullover.</li>
                    <li>Adjustable drawstring hood.</li>
                  </ul>
                </div>


          </div>

<?php

}
}

 ?>

<div id="footer"></div>
<script>


document.getElementById('addtocart').onclick=function(){
  var productname1=document.getElementById('product_name').innerHTML;
  alert(productname1);
  window.location = "addtocart.php?prod_name=" + productname1;
}

document.getElementById('buybutton').onclick=function(){
  var productname1=document.getElementById('product_name').innerHTML;
  var productprice1=document.getElementById('product_price').innerHTML;
  window.location = "checkout1.php?prod_name="+ productname1+"&prod_price="+productprice1;
}

</script>


    </body>
</html>
