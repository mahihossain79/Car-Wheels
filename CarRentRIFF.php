<?php include('db_connect.php'); ?>
<!DOCTYPE html>

<html lang="en">
    
  <head>
      
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <style>
      
          .jumbotron {
              
              background-image: url("rolce.jpg");
              text-align: center;
              margin-top: 50px;
              width: 100%;
              height:750px;
              color: white;
                }
          
          #email {
              
              width: 300px;
              
          }
          
          #appSummary {
              
              text-align: center;
              margin-top:50px;
              margin-bottom: 50px;
              
          }
          
          .card-img-top {
              
              width: 100%;
              
          }
          
          #appStoreIcon {
              
              width: 200px;
              
          }
          
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
          #audi {
            height: 225px;
     }

          .navbar{
            background-color: #dce3ef;
            color: black;
            font-size: 150%;

          }
          #want{
            color: white;
            font-weight: bold;
          }
      #logo{
        background-color: #808284
        font-weight: bold;
        color: blue;
        margin-right: 40px;
        color: red;
        font-size: 200%;
      }
      </style>
      
  </head>
    
  <body data-spy="scroll" data-target="#navbar" data-offset="100">
      
        <nav class="navbar navbar-light navbar-fixed-top" id="navbar">
          <a  class="navbar-brand" href="CarRent.php"><h2>Car Wheels</h2></a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Contact</a>
            </li>
          </ul>
          <form class="form-inline pull-xs-right">
            <input class="form-control" type="email" placeholder="Email">
              <input class="form-control" type="password" placeholder="Password">
            <button class="btn btn-success" type="submit">Login</button>
          </form>
        </nav>

        <div class="jumbotron" id="jumbotron">
          <h1 class="display-3">BUY . SELL . RENT</h1>
          <p class="lead"><strong> Drive Your Own Car Now </strong></p>
          <hr class="m-y-2">
          <p id="want" ><em>Want to know more? Subscribe for our NewsLetter</em></p>


        <form class="form-inline">
          <div class="form-group">
            <label class="sr-only" for="email">Email address</label>
            <div class="input-group">
              <div class="input-group-addon">@</div>
              <input type="email" class="form-control" id="email" placeholder="Your email">
            </div>
          </div>
          <button type="submit" class="btn btn-primary" href="CustomerDataSubmit.php">Sign up</button>
        </form>
        </div>
      
      <div class="container">
      
        <div class="row" id="appSummary">
          
            <h1><strong>WANNA DRIVE YOUR DREAM CAR?</strong> </h1>
            <p class="lead"><Strong>THINK NO MORE.</strong></p>
          <p class="lead"> <em> RENT ANY CAR OF YOUR CHOICE.</em></p>

          </div>
          
      </div>
      
      <div class="container" id="about">
      <div class="card-deck-wrapper">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="audi.jpg" id="audi" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title"><i class="fa fa-car"></i> Buy</h4>
        <p class="card-text">Looking for luxurious car in affordable price?<br> <a href="Cars.php" target="blank">See Our Cars</a></p>
        
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="toyota.jpg" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title"><i class="fa fa-car"></i> Sell</h4>
        <p class="card-text">Want to sell you car in good price? <br><a href="SellCar.php" target="blank">Sell Now</a></p>
        
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="lax.jpg" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title"><i class="fa fa-car"></i> Rent</h4>
        <p class="card-text">Not enough money to buy a car? Rent for as long as u want.<br><a href="Rent.php" target="blank">Rent Now</a></p>
       
      </div>
    </div>
  </div>
</div>
          </div>
      
      <div id="footer">
      
        <div class="row">
          
                <h2>Contact </h2>
            
            
            
            <p><em>Shakhawat Hossain Mahi-1612558042</em></p>
            <p><em>Umme Habiba Maliha-1612150042</em></p>
            <p><em>Samsul Arefin Riffat-1611274042</em></p>
            <p><em>Himel Ahmed-1611780042</em></p>
            
          
          </div>
      
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>
    
</html>
<?php include('db_close.php'); ?>