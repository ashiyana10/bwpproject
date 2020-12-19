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
  height: 300px;
}



 </style>
</head>
<body>
<?php 
session_start();
 include "header.php"; 
 include "connect.php";
 include "modal.php";
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<p><b><h3><center>Your Profile</center></h3></b></p>
		</div>
	</div><br>
	<?php
	if (isset($_SESSION['cid'])) {
		$cid=$_SESSION['cid'];

                    $ans=$conn->prepare("select * from candidate where id=:cid");
                    $ans->bindParam(':cid',$cid);
                    
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                ?>
	<div class="row">
		
		<div class="col-sm-9">
			<br>
			<h4><p>Name : <?php echo $row['name']; ?></p>
			<p>Age  : <?php echo $row['age']; ?></p>
			<p>Join Party Year : <?php echo $row['join_party_year']; ?></p>
			<p>Other Business : <?php echo $row['other_business']; ?></p></h4><br>
			<div class="row">
				<div class="col-sm-5">
					<h4><p><b><center>Personal Detail</center></b></p><br>
					<p>Contact No : <?php echo $row['contact_no']; ?></p>
					<p>Email-Id : <?php echo $row['email']; ?></p>
					<p>Address : <?php echo $row['address']; ?></p></h4>
				</div>
				<div class="col-sm-1">
					<div class="vl" style="margin-left: 0px;margin-top: 40px"></div>
				</div>
				<div class="col-sm-6" >
					<h4><p><b><center>Education Detail</center></b></p><br>
					<p><?php echo $row['education_detail']; ?>	</p></h4>
				</div>
			
			</div>	
		</div>
		<div class="col-sm-3">
			<img src="<?php echo $row['img']; ?>">
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-sm-12">
			<h4><p><b><center>Position in Politics (Past & Present)</center></b></p><br>
				<p><?php echo $row['position']; ?></p>
		</div>
	</div><br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<a href="edit_detail.php"><button style="width: 100%" class="btn btn-primary">Edit Detail</button></a>
		</div>
		<div class="col-sm-4"></div>
	</div><br>
</div>
<?php
}
}

if (isset($_SESSION['vid'])) {
		$vid=$_SESSION['vid'];;
	

                    $ans=$conn->prepare("select * from voter where id=:vid");
                    $ans->bindParam(':vid',$vid);
                    
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                ?>

	<div class="row">
		<div class="col-sm-3">
			<h4><p><b>Card Number  : <?php echo $row['card_number']; ?></b></p><br>
			<img src="<?php echo $row['profile_img']; ?>" height="250" width="270">
		</div>
		<div class="col-sm-1">
					<div class="vl" style="margin-left: 0px;margin-top: 40px"></div>
		</div>
		<div class="col-sm-8">
			<br>
			<h4><p>Name : <?php echo $row['surname']; echo "&nbsp".$row['middle_name']; echo "&nbsp".$row['last_name']; ?></p>
			<p>Contact  : <?php echo $row['tel']; ?></p>
			<p>Date of Birth : <?php echo $row['dob']; ?></p>
			<p>Address : <?php echo $row['address'].","; echo $row['city'].","; echo $row['state']; ?></p></h4><br>
		</div>
	</div>
<?php
}
}?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
</body>
</html>