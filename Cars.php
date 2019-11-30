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
      
          
          
          .card-img-top {
              
              width: 100%;
              
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
            #about{
              position: relative;
              top:50px;
            }
      </style>
      
  </head>
    
  <body >
      
        <nav class="navbar navbar-light navbar-fixed-top" id="navbar">
          <a  class="navbar-brand" href="CarRent.php"><h2>Car Wheels</h2></a>
          <ul class="nav navbar-nav"></ul>
        </nav>


                <div class="container" id="about">
                  <p ><h1 style="text-align: center">Available Cars</h1></p>
                <div class="card-deck-wrapper">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="premio.jpg" id="audi" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Toyota Premio</h4>
                  <p class="card-text"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br> <a href="cardetails.php">See More</a></p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="toyota.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Toyota Allion</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br><a href="cardetails.php">See More</a></p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="prado.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i>Land Cruiser Prado</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br><a href="cardetails.php">See More</a></p>
                 
                </div>
              </div>
            </div>
          
                  <div class="container" id="about">
                    <div class="card-deck-wrapper">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="lancer.jpg" id="audi" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Mitsubishi Lancer</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br> <a href="cardetails.php">See More</a></p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="lam.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Lamborhini CENTENARIO</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. <br><a href="cardetails.php">See More</a></p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="pajero.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Pajero Sport</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br><a href="cardetails.php">See More</a></p>
                 
                </div>
              </div>
            </div>
          </div>
                    </div>
                <div class="container" id="about">
                    <div class="card-deck-wrapper">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="audi.jpg" id="audi" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Audi A8</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br> <a href="cardetails.php">See More</a></p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="benz.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Mercedes Benz</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. <br><a href="cardetails.php">See More</a></p>
                  
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="lax.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title"><i class="fa fa-car"></i> Lexus</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.<br><a href="cardetails.php"> See More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
                            


      <div id="footer">
      
        <div class="row">
          
                <h2>Contact </h2>
            
            
            
            <p>Shakhawat Hossain Mahi</p>
            <p>Umme Habiba Maliha</p>
            <p>Samsul Arefin Riffat</p>
            <p>Himel Ahmed</p>
            
            
          
          </div>
      
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>
    
</html>
<?php include('db_close.php'); ?>