<?php
include 'connect.php';
session_start();
if (isset($_SESSION['cid'])) {
		$cid=$_SESSION['cid'];
	}	

?>
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
 	.vl {
  border-left: 2px solid #5B5A58;
  height: 120px;
}
input,textarea
{
	border-top: none;
	border-left: none;
	border-right: none;
	background:transparent;
	outline: none;
}


 </style>
</head>
<body>
<?php 
if (isset($_POST['upload'])) {

	$img1=$_FILES['img']['name'];
	$path1=move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$img1);
	$new1="upload/".$img1;
	
	$ins=$conn->prepare("update candidate set img=:img where id=:cid");
	$ins->bindParam(':img',$new1);
	$ins->bindParam(':cid',$cid);
	$ins->execute();
	
}
if (isset($_POST['submit']))
{
	
	$age=$_POST['age'];
	$party_year=$_POST['party_year'];
	$business=$_POST['business'];
	
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$education_detail=$_POST['education_detail'];
	$position=$_POST['position'];
	$ins=$conn->prepare("update candidate set age=:age,join_party_year=:party_year,other_business=:business,contact_no=:contact,address=:address,education_detail=:education_detail,position=:position where id=:cid");
	$ins->bindParam(':age',$age);
	$ins->bindParam(':party_year',$party_year);
	$ins->bindParam(':business',$business);
	$ins->bindParam(':contact',$contact);
	$ins->bindParam(':address',$address);
	$ins->bindParam(':education_detail',$education_detail);
	$ins->bindParam(':position',$position);
	$ins->bindParam(':cid',$cid);
	$ins->execute();
	}

 include "header.php";
  ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p><b><h3><center>Our Candidate Detail</center></h3></b></p>
		</div>
	</div><br>

<?php
	
                    $ans=$conn->prepare("select * from candidate where id=:cid");
                    $ans->bindParam(':cid',$cid);
                    
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                ?>


	<div class="row">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
		<div class="col-sm-4">
			<img src="<?php echo $row['img']; ?>" height="300px" width="300"><br><br>
			<p><b>Choose Photo</b></p>
			<div class="row">
				<div class="col-sm-6"><input type="file" name="img"></div>
				<div class="col-sm-6"><input type="submit" name="upload" value="Upload" class="btn btn-primary"></div>
			</div>
		</div>
</form>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
		<div class="col-sm-8">
			<br>
			<h4><p>Name : <input type="text" name="nm" value="<?php echo $row['name']; ?>" disabled/> </p>
			<p>Age  : <input type="text" name="age" value="<?php echo $row['age']; ?>"></p>
			<p>Join Party Year : <input type="text" name="party_year" value="<?php echo $row['join_party_year']; ?>"></p>
			<p>Other Business : <input type="text" name="business" value="<?php echo $row['other_business']; ?>"></p></h4><br>
			<div class="row">
				<div class="col-sm-6">
					<h4><p><b><center>Personal Detail</center></b></p><br>
					<p>Contact No : <input type="text" name="contact" value="<?php echo $row['contact_no']; ?>"></p>
					<p>Email-Id : <input type="text" name="email" value="<?php echo $row['email']; ?>" disabled></p>
					<p>Address : <input type="text" name="address" value="<?php echo $row['address']; ?>"></p></h4>
				</div>
				<div class="col-sm-1">
					<div class="vl" style="margin-left: 0px;margin-top: 40px"></div>
				</div>
				<div class="col-sm-5" >
					<h4><p><b><center>Education Detail</center></b></p><br>
					<p><textarea rows="6" cols="40" name="education_detail"><?php echo $row['education_detail']; ?>
					</textarea> </p></h4>
				</div>	
			</div>
		
	</div><br><br>
	<div class="row">
		<div class="col-sm-12">
			<h4><p><b><center>Position in Politics (Past & Present)</center></b></p><br>
			<p><textarea rows="6" cols="130" name="position"><?php echo $row['position']; ?>
					</textarea> </p></h4>
		</div>
	</div><br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<input type="submit" name="submit" value="Save" class="btn btn-primary" style="width: 100%">
		</div>
		<div class="col-sm-4"></div>
	</div><br>
</form>
</div>
<?php
}?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
</body>
</html>