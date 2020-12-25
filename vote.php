
<?php
session_start();
include 'connect.php';
$year=$_REQUEST['year'];
if (isset($_SESSION['vid'])) {
	$vid=$_SESSION['vid'];
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>E-voting</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 



 
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/styles.css" rel="stylesheet" /><!-- font css --> 


    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->
    
    
    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet"> 
    <script type="text/javascript" src="js/search1.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
     <link rel="stylesheet" type="text/css" href="search.css">
     <link rel="stylesheet" href="css/sweet-alert.css">
        <script src="js/sweetalert.min.js"></script>
</head>
<body background="images\flag3.jpg" style="background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
<?php
		include 'header.php';
		include 'modal.php';
?>
<div class="container">

	<div class="jumbotron1"><br>
				<div class="row">
					<div class="col-sm-12">
						<p><b><h3><center>Give The Vote Our Area Candidate</center></h3></b></p>
					</div>
				</div><br>
				<div class="row">
					<div class="col-sm-12">
								<table border="1" width="100%" class="table table-bordered text-center" style="font-size: 16px">
									<tr>
										<th><center>Profile Image</th>
										<th><center>Party</th>	
										<th><center>View Detail</th>
										<th><center>Give Vote</th>
									</tr>
								<?php
								
								$ans1=$conn->prepare("select * from voter where id=:vid");
													$ans1->bindParam(':vid',$vid);
													$ans1->execute();
													while($row1=$ans1->fetch())
													{
														$aid=$row1['area'];
														$email=$row1['email'];
													}
													$ans2=$conn->prepare("select * from candidate where area_id=:aid");
													$ans2->bindParam(':aid',$aid);
													$ans2->execute();
													while($row2=$ans2->fetch())
													{

														$pid=$row2['party_id'];
														$ans3=$conn->prepare("select * from parties where id=:pid");
														$ans3->bindParam(':pid',$pid);
														$ans3->execute();
														while($row3=$ans3->fetch())
		
														{
															$pimg=$row3['img'];
															$pname=$row3['party_name'];
														}
														?>
														<tr>
															<td><img src="<?php echo $row2['img']; ?>" ><br><br><b><?php echo $row2['name']; ?></b></td>
															<td><img src="<?php echo $pimg; ?>" height="290px" width="280px"><br><br><b><?php echo $pname; ?></b></td>
															<td><a href="can_detail.php?aid=<?php echo $row2['area_id']; ?>&pid=<?php echo $row2['party_id']; ?>">View Detail</a></td>

															<td>Give Vote<br><br><a href="mail.php?year=<?php echo $year; ?>&cid=<?php echo $row2['id']; ?>&vid=<?php echo $vid; ?>"><button class="btn btn-danger">Click Here For <br>Give Vote Using Mobile No</button></a></td>
														</tr>
														<?php	
													}

								?>
								</table>
					</div>
				</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>


	
	<?php
}
else{
	$_SESSION['login_first']=1;
	header('index.php');
}


?>