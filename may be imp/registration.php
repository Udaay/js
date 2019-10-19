<!DOCTYPE html>
<html>

<head>

  <title>Login</title>

  <style>
      
    #signin{
      font-size: 16px;
      border-radius: 8px;
      background-color: #008CBA;
      border: 1px solid black; 
    }
    input {
        border-radius: 7px;
        border: 1px solid black;
        height: 25px;
        width: 250px;
        font-size: 25px;     
    }
      label{
          font-size: 25px;
      }
      
    tr
      {
          background-color: orange;
      }

    @media screen and (max-width: 600px) {    
     
        input {
        border-radius: 7px;
        border: 1px solid black;
        height: 25px;
        width: 150px;
        font-size: 20px;     
    }
        label{
          font-size: 23px;
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
          $("#header").load("header.html"); 
          $("#footer").load("footer.html"); 
        });
    </script>
</head>
    
<body >
    <div id="header"></div>
    
  <form align="center"id="form1" name="signinform" method="POST"  action="">
      
      <table width="50%" height="100%" align="center"> 
      <tr>
          <td><label>Email Id:</label></td>
          <td><input type="text" class="form-control" name="emailid" > </td>
      </tr>

      <tr>
          <td><label>Username: </label></td>
        <td> <input  type="text"  name="username" ></td>
      </tr>

      <tr>
          <td><label>Password:</label></td>
        <td> <input type="text" class="form-control" name="pass" > </td>
      </tr>

      <tr>
          <td><label>Confirm Password:</label></td>
          <td><input name="repass" ></td>
      </tr>
        
    </table>
      <button id="signin" class="btn btn-primary custom-button-width" >Sign in</button>
  </form>




  <script>
  document.getElementById("signin").onclick =validate()
  {
      var flag=true;
      var emailid=document.signinform.email.value;
     
      var username=document.signinform.username.value;
      var password=document.signinform.password1.value;
      var repass=document.signinform.repass.value;
      
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailid) == false){
        alert('Invalid Email')
        flag = false;
      } 
      if(/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/.test(username) == false){
        alert('Invalid username')
        flag= false;
      }
      var passw=  /^[A-Za-z]\w{7,14}$/;
      if(inputtxt.value.match(passw)) { 
        alert('Correct, try another...')
        flag= true;
      }
      else
      { 
      alert('Wrong...!')
      return false;
      }
  }


    document.getElementById("login").onclick=function(){
      location.href ="login.php";
    }


  </script>

</body>

</html>


