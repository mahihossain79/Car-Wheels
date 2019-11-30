<?php include("db_connect.php");?>
       

<!DOCTYPE html>

<html lang="en">
    
  <head>

    <title> CAR WHEELS</title>
      
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Customer Data Submit Form</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <style>
      
          
        
          body {
              
              position: relative;
             background-image: url("bmw.jpg");
              
          }
     }

          #navbar{
            background-color: #dce3ef;
            color: white;
            font-size: 150%;

          }
      #logo{
        background-color: #808284
        font-weight: bold;
        color: white;
        margin-right: 40px;
        color: red;
        font-size: 200%;
      }
      #form1{
        background-color: black;
        color: white;
        position: relative;
        top: 95px;
        

      }
      
      
      .panel-heading{
        text-align: center;
        padding: 10px;
        padding-bottom: 20px;
      }
      </style>
      
  </head>
    
  <body>
      
         <nav class="navbar navbar-light navbar-fixed-top" id="navbar">
          <a  class="navbar-brand" href="CarRent.php"><h2>Car Wheels</h2></a>
          <ul class="nav navbar-nav"></ul>
        </nav>

        

        <form action="CustomerDataSubmitForm.php" method="POST">
     <div  class="container" id="form1">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading"><h2> Customer Details<h2/></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
              
                <div class="form-group">
                  <label for="ID">Customer id: </label>
                  <input type="text" name="cid" class="form-control" id="cid" >
                </div>


                <div class="form-group">
                  <label for="name">Full name: <span style="color: red">*</span></label>
                  <input type="text" name="cname" class="form-control" id="cname" required>
                </div>

                
                <div class="form-group">
                  <label for="password">Password: <span style="color: red">*</span></label>
                  <input type="text" name="passkey" class="form-control" id="passkey" required>
                </div>

                <div class="form-group">
                  <label for="presentAddress">Present address:</label>
                  <textarea name="present_address" id="present_address" class="form-control" cols="30" rows="2"></textarea>
                </div>

                <div class="form-group">
                  <label for="permanentAddress">Permanent address:</label>
                  <textarea name="permanent_address" id="permanent_address" class="form-control" cols="30" rows="2"></textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="profession">Profession:</label>
                  <select name="profession" class="form-control" id="profession" >
                    
                    <option value="Govt Job">Select Your Profession</option>
                    <option value="Govt Job">Govt. Job</option>
                    <option value="Private Job">Private Job</option>
                    <option value="Business">Business</option>
                    <option value="Farmer">Farmer</option>
                    <option value="Retired">Retired</option>
                    <option value="Others">Others</option>
                  </select>
                </div>

               
                <div class="form-group">
                  <label for="mobile">Mobile No: <span style="color: red">*</span></label>
                  <input type="text" name="phone" class="form-control" id="phone" required>
                </div>
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="text" name="email" class="form-control" id="email" >
                </div>               
                
                <br>
                <p><b><span style="color: red">*</span> fields are required!</b></p>
              </div>
              
              <div class="col-md-12">
                <button type="Submit" name="Submit" class="btn btn-info btn-block">Submit</button>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
</form>
      
      
      
      </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>
  <script src="CarRent/js/jquery.min.js"></script>
  <script src="CarRent/js/bootstrap.min.js"></script>
    
</html>
<?php include('db_close.php'); ?>