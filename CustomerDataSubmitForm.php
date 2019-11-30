

<?php include("db_connect.php");
        
 	if(isset($_POST['Submit'])){
            $cname  = $_POST['cname'];
            $cid=$_POST['cid'];
			$passkey=$_POST['passkey'];	
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$present_address=$_POST['present_address'];
			$permanent_address=$_POST['permanent_address'];
			$profession=$_POST['profession'];
		
			
        $r1 = "INSERT INTO customer( cid, cname, passkey, phone, email, present_address, permanent_address, profession)
         VALUES ('$cid','$cname','$passkey','$phone','$email','$present_address','$permanent_address','$profession')";

         
      if ($conn->query($r1) === TRUE) {
		
        header('Location: signedup.php');

          } else {
          echo " Error";
           }
       }
?>

