<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon (2).ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar (2).css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util (2).css">
	<link rel="stylesheet" type="text/css" href="css/main (2).css">
<!--===============================================================================================-->
</head>
<body>
<?php
         $dbhost = 'localhost:3036';
         $dbuser = 'guest1';
         $dbpass = 'guest1a';
		 $dbname = 'onemusec_data';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if ($conn->connect_error) {
		  die("Database connection failed: " . $conn->connect_error);
		}
         echo 'Connected successfully';
         mysql_close($conn);
      ?>
	<div class="limiter">
		<div class="container-table100">
				<div class="table100 ver6 m-b-110">
					<!-- <table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Blogger</th>
								<th class="column100 column2" data-column="column2">Promo code</th>
								<th class="column100 column3" data-column="column3">Amount of passed</th>
							</tr>
						</thead>
						<tbody> -->
						

							<!-- <tr class="row100">
								<td class="column100 column1" data-column="column1">Lawrence Scott</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Jane Medina</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Billy Mitchell</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Beverly Reid</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Tiffany Wade</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sean Adams</td>
								<td class="column100 column2" data-column="column2">--</td>
								<td class="column100 column3" data-column="column3">5:00 PM</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Rachel Simpson</td>
								<td class="column100 column2" data-column="column2">9:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Mark Salazar</td>
								<td class="column100 column2" data-column="column2">8:00 AM</td>
								<td class="column100 column3" data-column="column3">--</td> -->
							<!-- </tr> -->
						<!-- </tbody>
					</table> -->
					<!-- <form action="" method="post">
						<input type="text" name="Blogger" id="" placeholder="Name of blogger">
						<input type="text" name="Blogger" id="" placeholder="Promo">
					</form> -->
				</div>
			</div>
		</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min (2).js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper (2).js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min (2).js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min (2).js"></script>
<!--===============================================================================================-->
	<script src="js/main (2).js"></script>

</body>
</html>