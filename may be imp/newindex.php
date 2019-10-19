<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>

    .login{
      
    }

    @media only screen and (min-width: 768px) {
      .login{
          position: relative;
      left:1000px;
      margin:0px 10px 0px 0px;
      }

    }
    



  </style>


</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="logo" style="width:60px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class=" navbar-nav">
        <input placeholder="Username" class="login form-control" name="username" id="username" minlength="4" size="13" maxlength="12">
        <input placeholder="Password" type="text" class="login form-control " name="password" size="13" id="password" maxlength="12" minlength="6">
        <div class="nav-item"><button id="login" type="button" class="login btn btn-success custom-button-width">Login</button>
      </div> 
      </div>
    </div> 
  </nav>

<div class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic5.png" alt="Los Angeles" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="pic7.jpg" alt="Chicago" width="100%" height="500">
    </div>
    <div class="carousel-item">
      <img src="pic9.jpg" alt="New York" width="100%" height="500">
    </div>
  </div>



  <h1><p align="center">Auction Bidding Platform</p></h1>
<p align="center" >The freedom to sell/auction as many products as the user wants.</p> 
<p align="center" >Highest standards for our customer’s privacy</p>
<p align="center" >Accurate product and pricing information</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div > 
  <img class="img-responsive" src="mobile.png" style="position: relative;  left: -200px;"/>
</div>

<script>
  document.getElementById("signup").onclick= function(){
    location.href ="register2.html";
  }

</script>

</body>
</html>
