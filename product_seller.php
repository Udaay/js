<!DOCTYPE html>
<html>

   <head>


   </head>

   <style>



   </style>



   <body>

      <?php
         $server     = "localhost:3306";
         $username   = "root";
         $password   = "";
         $database   = "mysql";

         $con = mysqli_connect($server, $username, $password, $database);

         if(!$con){
            die("Error : " . $con->connect_error);
         }
         echo "Connection Established <br>";

         $pname    = $_POST["productname"];
         $pdescription  = $_POST["description"];
         $biddingprice   = $_POST["biddingprice"];
         $productduration = $_POST["time"];
         $sql = "insert into product_seller(product-name,description,bidding_price,duration) values('$pname', '$pdescription', '$biddingprice','$productduration')";

         echo $sql . "<br>";
         if($con->query($sql) == TRUE){
            echo "Record Inserted";
         }else{
            echo($con->error);
         }
      ?>
   </body>

</html>
