<?php include('db_connect.php');
    if(isset($_POST['submit'])){
            $rentingDate  = $_POST['rentingDate'];
            $rfrom=$_POST['rfrom'];
            $destination=$_POST['destination']; 
            $duration=$_POST['duration'];
            $cartype=$_POST['cartype'];
            $pickUpAddress=$_POST['pickUpAddress'];
            $car_id=$_POST['car_id'];
            $cid=$_POST['cid'];
    
      
        $r1 = "INSERT INTO rent(rentingDate, rfrom, destination, duration, cartype, pickUpAddress,  car_id, cid)
         VALUES ('$rentingDate', '$rfrom', '$destination', '$duration', '$cartype', '$pickUpAddress',  '$car_id', '$cid')";

      if ($conn->query($r1) === TRUE) {
        header('Location: rentsuccess.php');
          } else {
          echo " Error:";
           }
       }
?>

<!DOCTYPE html>

<html lang="en">
    
  <head>

    <title> RENT</title>
      
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
              
          } #logo{
              color: black;
              margin-right: 40px;
              background-color: #dce3ef;
              width: 250px;
              height: 50px;
              padding-top: 6px;
              padding-left: 20px;
              padding-bottom: 30px;
              font-weight: bolder; 
              text-decoration: none;

            }
            a{
              text-decoration:none;
            }
            a:hover{
              text-decoration: none;
            }
            #form1{
              background-color: black;
              color: orange;
            }
            #header
            {
              margin-top:5px;
               text-align:center;
            }
      </style>
      
  </head>
    
  <body >
      
        <nav class="navbar navbar-light navbar-fixed-top" id="navbar">
          <a  class="navbar-brand" href="CarRent.php"><h2>Car Wheels</h2></a>
          <ul class="nav navbar-nav"></ul>
        </nav>


           <form action="" method="POST">
            
         <div  class="container" id="form1">
    <div class="col-md-8 col-md-offset-3">
      <div class="panel panel-default">
      <div class="panel-heading"><h2 id="header" > Renting Details<h2/></div>
        <div class="panel-body">
              <div class="col-md-8">
          
               
                 <div class="form-group">
                  <label for="rentingDate">Date: <span style="color: red">*</span></label>
                  <input type="Date" name="rentingDate" class="form-control" id="rentingDate" required>
                </div>


                
                <div class="form-group">
                  <label for="rfrom">From: <span style="color: red">*</span></label>
                  <input type="text" name="rfrom" class="form-control" placeholder="City" id="rfrom" required>
                </div>

                <div class="form-group">
                  <label for="destination"> Destination: <span style="color: red">*</span></label>
                  <input type="text" name="destination" class="form-control" id="destination" required>
                </div>


                <div class="form-group">
                  <label for="duration">Duration: <span style="color: red">*</span></label>
                  <input type="text" name="duration" class="form-control" id="duration" required>
                </div>

                <div class="form-group">
                  <label for="cartype">Car Type: </label>
                     <select name="cartype" class="form-control" id="cartype"  required>
                    
                    <option value="type">Select Car Type</option>
                    <option value="Sedan">Sedan</option>
                    <option value="HatchBack">Hatch Back</option>
                    <option value="Microbus">Micro Bus</option>
                    <option value="Wagon">Wagon</option>
                    <option value="Others">Others</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pickupAddress">Pickup Address:</label>
                  <input type="text" name="pickUpAddress"  class="form-control"> 
                </div>

                <div class="form-group">
                  <label for="car_id">Car ID: </label>
                  <input type="text" name="car_id" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="cid">Customer ID:</label>
                  <input type="text" name="cid" class="form-control" >
                </div>
              </div>

                <br>
                <p><b><span style="color: red">*</span> fields are required!</b></p>
            
              
              <div class="col-md-7">
                <button style="margin: 5px;" type="submit" name="submit" class="btn btn-info btn-block">Request Car</button>
                  </div>
              </div>
            </div>
           </div>
         </div>
      </div>
    
  
   </form>
      
        

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
