<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">


  <style>



      body{
/*          background-image: url(res/grad.jpg);*/
/*          background-image: linear-gradient(#19b1c4, #5dbcc8);*/
           background-size: cover;
          background-color: whitesmoke;
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
          height: 400px;
          width: 50%;
          background-image: url(res/dash.jpg);
          background-size: cover;
          float:left;
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
          background-color: whitesmoke;


      }
      #r2{
          position: relative;
          background-color: black;

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
/*
      .card
      {
          margin: 0px 1px 0px 1px;
      }
*/
        .bidbutton{
          background-color: #00BFFF;
          position: relative;
          font-size: 30px;
         margin:60px 0px 0px 280px;
        }
        .bidbutton1{
          background-color: #00BFFF;
          position: relative;
          font-size: 20px;
         margin:60px 0px 0px 100px;
         padding-left: 15px;
         padding-right: 15px;
        }
        .bidbutton2{
          background-color: white;
          position: relative;
          font-size: 20px;
         margin:60px 0px 0px 100px;
         padding-left: 15px;
         padding-right: 15px;
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
</head>
<body>
    <div id="header"></div>
<!--
      <ul>

        <div id="regis">
            <li><input ></input></li>
        <li><input placeholder="Username" name="username" id="username" minlength="4" size="13" maxlength="12"></li>
        <li><input placeholder="Password" type="text" name="password" size="13" id="password" maxlength="12" minlength="6"></li>
        <li><button id="loginbutton" type="button"> Login</button></li>
      </div>
    logo    <li><img src="res/list.png" height="50px" width="50px" > </li>
      </ul>
-->

      <div id="c"> </div>

    <div id="d1" class="col-10 col-sm-10 col-md-6 col-lg-6">
             <div>
                  <button class="bidbutton" id="registerbutton">Register</button>
            </div>

    </div>
        <div class="dright col-10 col-sm-10 col-md-6 col-lg-6" id="r1">

            <img class ="zoom" id ="phone"src="res/phone.png" height ="100%" width="40%" >
            <div>
                    <p>30000</p>
                  <button class="bidbutton1" id="buy">Buy</button>
            </div>

        </div>
        <div class="dright col-10 col-sm-10 col-md-6 col-lg-6" id="r2">

           <figure> <img id="watch" class ="zoom" src="res/watch.png" height="90%" width="40%"> </figure>
           <div>
                  <button class="bidbutton2" id="buy">Buy</button>
            </div>
        </div>

<div id="clr-f"></div>

  <div align="center" style="font-size:50px" >How It Works </div>


 <div style= " margin: 30px 0px 30px 0px ">

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

    </div>

<hr>

<br>
<h1 align="center">CURRENT AUCTIONS</h1>
    <br>

    <div class="container">
  <div class="row">

    <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
          <center><h4 class="card-title">$1300</h4></center>
          <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
          <center><h4 class="card-title">$1300</h4></center>
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <center><h4 class="card-title">$1300</h4></center>
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <center><h4 class="card-title">$1300</h4></center>
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <center><h4 class="card-title">$1300</h4></center>
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <center><h4 class="card-title">$1300</h4></center>
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>

      <div class="card col-10 col-sm-5 col-md-4 col-lg-3" style="width:400px">
      <img class="card-img-top" src="res/watch.png" alt="Card image" style="width:100%">
      <div class="card-body">
        <center><h4 class="card-title">Watch</h4></center>
          <center><a href="#" class="btn btn-primary">Submit Bid</a></center>
      </div>
    </div>



</div>
</div>

      <h3 align="center">SEE all </h3>
</body>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Online<span>Auction</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Rose Villa</span> Bhandup, Mumbai</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>9898117437</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@bidspace.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					bla bla bla...
				</p>



			</div>

		</footer>





<script>
  document.getElementById("registerbutton").onclick= function(){
    location.href ="registration.php";
  }
  document.getElementById("loginbutton").onclick= function(){
    location.href ="login.php";
  }

</script>

</body>
</html>
