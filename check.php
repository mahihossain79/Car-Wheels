
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post" >
<div>

  <label for="input">name</label>
  <input type="text" name="name" id="input"  placeholder="Enter your First name">
  <label for="input">Last name</label>
  <input type="text" name="id" id="input" placeholder="Enter your Last name">
  <input type="Submit" name="Submit">

</body>
</html>
<?php

      $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn==false) {
      die("Connection failed: " . $conn->connect_error);
  }
  $db = mysqli_select_db($conn, "check");
            if(isset($_POST['Submit'])){
            $name  = $_POST['name'];
            $id  = $_POST['id'];


        $r1 = "INSERT INTO user(name,id)
         VALUES ('$name','$id')";

      if ($conn->query($r1) == TRUE) {
        echo "New record created successfully";
          } else {
          echo " Error:";
           }



          }
       ?>
       