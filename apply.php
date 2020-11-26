<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
 	<style type="text/css">
 		.opacity1{
 			opacity: 0.7;
 		}
 	</style>

</head>
<body background="images\fort.jpg" style="background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
	<?php include "header.html"; ?>
<div class="container"><br><br>
	<div class="jumbotron opacity1">
		<center> <h3>Apply For Voter Or Candidate</center><br><br>
		<form class="form-inline" role="form" action="voter.php" method="GET" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-4">
					<input type="text" name="sur_nm" class="form-control" placeholder="Surname" style="width: 100%">
				</div>
				<div class="col-sm-4">
					<input type="text" name="m_nm" class="form-control" placeholder="Middle Name" style="width: 100%">
				</div>
				<div class="col-sm-4">
					<input type="text" name="l_nm" class="form-control" placeholder="Last Name" style="width: 100%">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="tel" name="tel" class="form-control" placeholder="Contact No" style="width: 100%">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="email" name="email" class="form-control" placeholder="E-mail" style="width: 100%">
				</div>
			</div><br>
			Birth Date:<br>
			<div class="row">
				<div class="col-sm-12">
					<input type="date" name="date" class="form-control" placeholder="E-mail" style="width: 100%">
				</div>
			</div><br>
			Gender:<br>
			<div class="row">
				<div class="col-sm-2">
					<input type="radio" name="gender" value="male" class="form-control">&nbsp;&nbsp;Male
				</div>
				<div class="col-sm-2">
					<input type="radio" name="gender" value="female" class="form-control">&nbsp;&nbsp;Female
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<textarea  rows="3" style="width: 100%" name="address" class="form-control" placeholder="Current Address">
						
					</textarea>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" name="pincode" class="form-control" placeholder="Pin Code" style="width: 100%">
				</div>
			</div><br>
			
			Current State:<br>
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control" name="state" style="width: 100%">
						<option hidden="">State</option>
						<option>Jamnagar</option>
						<option>Rajkot</option>
						<option>Ahemdabad</option>
						<option>Vadodra</option>
						<option>Surat</option>
					</select>
				</div>
			</div><br>
			Current City:<br>
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control" name="city" style="width: 100%">
						<option hidden="">City</option>
						<option>Jamnagar</option>
						<option>Rajkot</option>
						<option>Ahemdabad</option>
						<option>Vadodra</option>
						<option>Surat</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control" style="width: 100%">
						<option>Urban</option>
						<option>Rubal</option>
					</select>
				</div>
			</div><br>
			Upload Adhar Card:<br>
			Front Page:
			<div class="row">
				<div class="col-sm-12">	
					<input type="file" name="file1" class="form-control" style="width: 100%">
				</div>
			</div><br>
			Back Page:
			<div class="row">
				<div class="col-sm-12">
					<input type="file" name="file2" class="form-control" style="width: 100%">
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-4">
					<input type="Submit" class="btn btn-primary form-control" style="width: 100%" name="submit" value="Submit">
				</div>
				<div class="col-sm-4">
					<button type="button" class="btn btn-default form-control" style="width: 100%">Clear</button>
				</div>
				<div class="col-sm-4">
					<button type="button" class="btn btn-danger form-control" style="width: 100%">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>