<!DOCTYPE html>
<html>
<head>



  <style>



      body{
/*          background-image: url(res/grad.jpg);*/
         background-image: linear-gradient(white, whitesmoke);
           background-size: cover;

      }

    #c{
      float:none;
    }

      .image{
          border-radius: 7px;
        border-top: 5px solid #3090C7;
          border-bottom: 5px solid #3090C7;

      }
    .caro
      {
          padding: 10px 0px 10px 0px;
      }
      #d1{
          background-image: linear-gradient(white,#11B683);
          height: 400px;
          width: 50%;
          background-size: cover;
          float:left;
          border-top: 1px solid black;
          border-right: 1px solid black;
      }
      .dright{

          float: right;
          height: 200px;
          width: 50%;


      }

      .zoom:hover
      {
          -webkit-transition: .3s ease-in-out;
	       transition: .3s ease-in-out;
          transform: scale(1.05);

      }



      #r1{
          position: relative;
          background-color: white;
          border-top: 1px solid black;


      }
      #r2{
          position: relative;
          background-color: #11B683;

      }

      #phone
      {
          position: relative;
          float: right;
      }

      #watch
      {
          position: relative;
          float: left;

      }
      #clr-f
      {
          clear: both;
      }
      .howitworks{

         margin-top: 15px;

      }

      .number
      {
          height: 150px;
           margin: 0px 5% 0px 7%;
          width: 150px;
          border-radius: 50%;
          border-style: solid;
          border-width: 2px;
          border-color: black;
          background-color: whitesmoke;
      }

      .number:hover{
          background-image: radial-gradient(circle, #8078e6, #8078e6, #8078e6);
      }

      .combine
      {
           font-family: cursive;
          font-size: 40px;
          margin: 0px 5% 0px 7%;
          display: inline-block;
      }
      .num1
      {
          color: black;
          text-align: center;
          font-size: 100px;

      }
      .product_info{
          margin: 15px 0px 0px 40px;

      }
      .product_info2{
          color: white;
          float:right;
          margin: 15px 40px 0px 0px;

      }
      #registerlink{
          margin: 80px 0px 0px 70px;
      }
      .ol{
          font-size:3vw;
      }

      .card1 {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 20%;
        height:400px;
        border-radius: 5px;
        float: left;
        margin:20px 30px;
        cursor: pointer;
      }

      .card1:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }

      .cardimage{
        border-radius: 5px 5px 0 0;
      }

      .container1 {
        padding: 2px 16px;
      }

      #buybutton{
        width:80px;
      }
      @media screen and (max-width: 600px) {

          #phone{
              width: 200px;
          }
          #watch{
              width: auto;
          }
          #d1{
              width:100%;
              float:none;
          }
          .dright{
              float:none;
              width:100%;
          }
          .card1 {

            width:100%;

          }
      }

      @media screen and (max-width: 760px) and (min-width:600px) {

          .card1{
            width:40%;
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
</head>
<body>
    <!-- <div id="header"></div> -->

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


      <div id="c"> </div>


    <div id="d1" class="" >

        <div id="registerlink">
                <b><p class="ol">A2Z</p></b>
                    <p>A2Z is where you can get many variety</p>
                    <p>of Mobile and Watches.</p>
                    <button id="registerbutton" class="btn btn-success">Register</button>
            </div>

    </div>
    <div class="dright" id="r1">

            <img class ="zoom" id ="phone"src="res/phone.png" height ="100%" width="40%" >
            <div class="product_info">
                <b><p id="prod_name1">Iphone</p></b>
                    <p>$1000</p>
                  <button id="buybutton1" class="btn btn-success ">Buy</button>
            </div>
    </div>

    <div class="dright" id="r2">

            <img id="watch" class ="zoom" src="res/watch.png" height="90%" width="40%">
            <div class="product_info2">
                <b><p id="prod_name2">Watch</p></b>
                    <p>$100</p>
                  <button id="buybutton2" class="btn btn-success">Buy</button>
            </div>
    </div>

<div id="clr-f"></div>

  <!-- <div align="center" style="font-size:50px" >How It Works </div> -->


 <!-- <div style= " margin: 30px 0px 30px 0px ">

 <div class="combine">
     <div class="number"><p class="num1" >1</p></div>

     <div class="howitworks">Register</div>
</div>

<div class="combine">
     <div class="number"><p class="num1" >2</p></div>

     <div class="howitworks">Buy or Bid</div>
</div >

<div class="combine">
     <div class="number"><p class="num1">3</p></div>

     <div class="howitworks">Submit bid</div>
</div>

<div class="combine">
     <div class="number"><p class="num1" >4</p></div>

     <div class="howitworks">&ensp;&ensp;Win!!!</div>
</div>

    </div> -->

<hr>

<br>
<h1 align="center">CURRENT PRODUCTS</h1>
    <br>

    <div class="row">


    <?php

    $server     = "localhost:3306";
    $username   = "root";
    $password   = "";
    $database   = "auction";

    $connect = mysqli_connect($server, $username, $password, $database);

    if(!$connect){
       die("Error : " . $connect>connect_error);
    }

    $sql="SELECT productname,startingprice,quantity,details,warrantyperiod,image,productid FROM product_insert";
    $result = $connect->query($sql);
    $count=1;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {


          $productname =  $row["productname"];
          $startingprice =  $row["startingprice"];
          $quantity =  $row["quantity"];
          $details =  $row["details"];
          $warrantyperiod =  $row["warrantyperiod"];
          $image =  $row["image"];
          $productid =  $row["productid"];

    ?>

    <div class="card1" id="productname<?php echo$count;?>">
      <img class="cardimage" src="./images/<?php echo $row["image"]; ?>" alt="Avatar" style="width:100%;height:70%">
      <div class="container1">
        <h4><b ><?php echo $row["productname"]; ?></b></h4>
        <p>Starting Price - <span id="startingprice"><?php echo $row["startingprice"]; ?></span></p>
        <p id="currentprice">Current Price - <?php echo $row["quantity"]; ?></p>
      </div>
    </div>


    <?php
        $count++;

      }
      }

     ?>

</div>





      <center><button class="btn btn-primary">SEE all </button></center>
</body>

<div id="footer"></div>





<script>
  document.getElementById("registerbutton").onclick= function(){
    location.href ="Registration.html";
  }
  document.getElementById("buybutton1").onclick= function(){
    var getprodname=document.getElementById("prod_name1").innerHTML
    window.location = "productdetails.php?prod_name=" + getprodname;
  }
  document.getElementById("buybutton2").onclick= function(){
    var getprodname=document.getElementById("prod_name2").innerHTML
    window.location = "productdetails.php?prod_name=" + getprodname;
  }
  document.getElementById("login").onclick= function(){
    location.href ="login.html";
  }

  var abc = document.querySelectorAll(".card1")
  console.log(abc);
  var b =[];
  // abc.onclick = function getHeader() {
  //   console.log("hel");
  //
  // }
  for(var i = 0; i < abc.length;i++) {
      abc[i].addEventListener('click',getIndex);
}
function getIndex(){
  // b[i]=document.getElementById(`productname${i}`).innerHTML;
  var a = this.id;
  var getprodname=document.querySelector(`#${a} .container1 h4 b`).innerHTML;
  alert(getprodname);
  window.location = "productdetails.php?prod_name=" + getprodname;

}



</script>


</body>
</html>
