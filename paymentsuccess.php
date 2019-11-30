<?php include('db_connect.php');
    if(isset($_POST['submit'])){
            $car_id  = $_POST['car_id'];
            $type=$_POST['type'];
            $engineCapacity=$_POST['engineCapacity']; 
            $model=$_POST['model'];
            $color=$_POST['color'];
            $seat_capacity=$_POST['seat_capacity'];
            $price=$_POST['price'];
    
      
        $r1 = "INSERT INTO car( car_id, type, engineCapacity,model, color, seat_capacity, price)
         VALUES ( '$car_id', '$type', '$engineCapacity','$model', '$color','$seat_capacity','$price')";

      if ($conn->query($r1) === TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }
       }
?>

<!DOCTYPE html>

<html lang="en">
    
  <head>
      

      <title> CAR WHEELS</title>
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <style>
      
          
          
          
          
          #footer {
              
              background-color: black;
              color: orange;
              padding-top: 150px;
              margin-top: 50px;
              text-align: center;
              padding-bottom: 150px;
          }
          
          body {
              
              position: relative;
              
         }
            #logo{
              color: black;
              margin-right: 40px;
              background-color: #dce3ef;
              width: 250px;
              height: 50px;
              padding-top: 6px;
              padding-left: 20px;
              padding-bottom: 30px;
              font-weight: bolder; 
            }
          

            #header
            {
              margin-top:5px; 
              text-align: center;
            }
      </style>
      
  </head>
    
  <body >
        <nav class="navbar navbar-light navbar-fixed-top" id="navbar">
          <a  class="navbar-brand" href="CarRent.php"><h2>Car Wheels</h2></a>
          <ul class="nav navbar-nav"></ul>
        </nav>

        
          
        <div class="jumbotron" id="jumbotron">
          <h1 class="display-5" style="text-align: center; color: red;">Congratulations! <br>Payment Successfull.<br>You are Now Owner of a Car</h1>
         
        </div>

      <div id="footer">
      
        <div class="row">
          
                <h2>Contact </h2>
            
            
            
            <p>Shakhawat Hossain Mahi-1612558042</p>
            <p>Umme Habiba Maliha-1612150042</p>
            <p>Samsul Arefin Riffat-1611274042</p>
            <p>Himel Ahmed-1611780042</p>
            
            
          
          </div>
      
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>
    
</html>
