

<?php include('db_connect.php'); 
$connection=mysqli_connect("localhost", "root","", "carrent");
	?>


<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> DashBoard</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
		<style type="text/css">
				#form1{
					float:bottom;
		</style>



</head>

<body>
		 <nav class="navbar navbar-light navbar-fixed-top" id="navbar">
          <a  class="navbar-brand" href="CarRent.php"><h2>Car Wheels</h2></a>
          <ul class="nav navbar-nav"></ul>
        </nav>
        	
        <form action="" method= "post" id="form">
        	<input type="name" name="cname">
        	<input type="submit" name="Submit">

        </form>
       

        	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Customer profile</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								
								<th>Customer ID</th>
								<th>Password</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Present Address</th>
								<th>Permanent Address</th>
								<th>Profession</th>
							</tr>
						</thead>

						<tbody>
							

							<?php
								if(isset($_POST['Submit'])){
									$cname=$_POST['cname'];
								$r1="SELECT * FROM customer WHERE cname ='$cname' ";
								$performQuery=mysqli_query($connection, $r1);

								if(!$performQuery)
									echo 'Query unsuccessful!';
								else{
									if(mysqli_num_rows($performQuery)>0){
										while($row=mysqli_fetch_array($performQuery)){
										?>
										
											<tr>
												<td><?php echo $row['cid']; ?></td>
												<td><?php echo $row['passkey']; ?></td>
												<td><?php echo $row['cname']; ?></td>
												<td><?php echo $row['phone']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php echo $row['present_address']; ?></td>
												<td><?php echo $row['permanent_address']; ?></td>
												<td><?php echo $row['profession']; ?></td>
												
											</tr>
										
										}
									}
								}
									else{ 
										<tr><td class="text-center" style="color: red" colspan="12">No data found!</td></tr>
								<?php
									}
								}
							?>	
								
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
	}
?>