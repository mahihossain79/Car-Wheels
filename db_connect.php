<?php

      $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, "");
   $db = mysqli_select_db($conn, "carrent");
  // Check connection
  if ($conn==false) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
       