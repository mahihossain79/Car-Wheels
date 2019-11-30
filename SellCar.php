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

    <title> SELL </title>
      
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
              background-image: url("bmw.jpg");
              
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
            #form1{
              background-color: black;
              color: orange;


            }

            #header
            {
              margin-top:5px; 
              text-align: center;
            }
      </style>
      
  </head>
    
  <body >
      
        <div id="logo">
         <a href="CarRent.php"><h1>Car Wheels</h1></a>

        </div>
        
         <div  class="container" id="form1">
    <div class="col-md-8 col-sm-offset-4">
      <div class="panel panel-default">
        
        <div class="panel-body">
          
            <div class="row">
              <div class="col-md-8">
                <div>
                <div class="panel-heading"><h2 id="header"> Car Details<h2/></div>
                  
                    <div class="form-group">
                  <label for="car_id">ID: <span style="color: red">*</span></label>
                  <input type="text" name="car_id" class="form-control" required>
                </div>


                  <div class="form-group">
                  <label for="type">Car Type: <span style="color: red"></span></label>
                     <select name="type" class="form-control" id="type"  required>
                    
                    <option value="type">Select Car Type</option>
                    <option value="Sedan">Sedan</option>
                    <option value="HatchBack">Hatch Back</option>
                    <option value="Microbus">Micro Bus</option>
                    <option value="Wagon">Wagon</option>
                    <option value="Others">Others</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="engineCapacity">Engine Capacity: <span style="color: red">*</span></label>
                  <input type="text" name="engineCapacity" class="form-control" required>
                </div>

                

                <div class="form-group">
                  <label for="model">Model: <span style="color: red"></span></label>
                  <input type="text" name="model" class="form-control" id="model" required>
                </div>


                <div class="form-group">
                  <label for="color">Color: <span style="color: red"></span></label>
                  <input type="text" name="color" class="form-control" id="color" required>
                </div>


                <div class="form-group">
                  <label for="seat_capacity">Seat Capacity:</label>
                  <input type="text" name="seat_capacity" id="seat_capacity" class="form-control" ></input>
                </div>
              </div>

              <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="text" name="price" id="price" class="form-control"></input>
                </div>
              </div>
               </div> 
                <br>
                <p><b><span style="color: red">*</span> fields are required!</b></p>
              </div>
              
              <div class="col-md-7">
                <button style="margin: 5px;" type="submit" name="submit" class="btn btn-info btn-block">Submit Details</button>
              </div>
            </div>
         
        </div>
      </div>
    </div>
  </div>
   </form>
  
      
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
