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
		<form class="form-inline" role="form" >
			<div class="row">
				<div class="col-sm-4">
					<input type="text" name="surnm" class="form-control" placeholder="Surname" style="width: 100%">
				</div>
				<div class="col-sm-4">
					<input type="text" name="mnm" class="form-control" placeholder="Middle Name" style="width: 100%">
				</div>
				<div class="col-sm-4">
					<input type="text" name="lnm" class="form-control" placeholder="Last Name" style="width: 100%">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" name="fnm" class="form-control" placeholder="Father Full Name" style="width: 100%">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="tel" name="email" class="form-control" placeholder="Contact No" style="width: 100%">
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
			<div class="row">
				<div class="col-sm-12">
					<textarea  rows="3" style="width: 100%" class="form-control" placeholder="Current Address">
						
					</textarea>
				</div>
			</div><br>
			Gender:<br>
			<div class="row">
				<div class="col-sm-2">
					<input type="radio" name="Gender" value="male" class="form-control">&nbsp;&nbsp;Male
				</div>
				<div class="col-sm-2">
					<input type="radio" name="Gender" value="female" class="form-control">&nbsp;&nbsp;Female
				</div>
			</div><br>
			Current City:<br>
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control" style="width: 100%">
						<option>City</option>
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
			<div class="row">
				<div class="col-sm-4">
					<button type="button" class="btn btn-primary form-control" style="width: 100%">Submit</button>
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