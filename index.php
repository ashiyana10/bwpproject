<!DOCTYPE html>
<html>
<head>
	<title>E-voting</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
 <style type="text/css">
 	body{
 		color: black;
 	}
 .re1	 .capsan:after {border:solid 2px #000; top:30px; left:40px; bottom:30px; right:30px; content:""; position:absolute;}
  .re1 .capsan {position:absolute; top:0px; left:0px; width:100%; text-align:center; height:100%; -moz-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);-webkit-transform:scale(0); transform:scale(0); -moz-transition:opacity 0.35s ease 0s, transform 0.35s ease 0s; -ms-transition:opacity 0.35s ease 0s, transform 0.35s ease 0s;-o-transition:opacity 0.35s ease 0s, transform 0.35s ease 0s;-webkit-transition:opacity 0.35s ease 0s, transform 0.35s ease 0s;transition:opacity 0.35s ease 0s, transform 0.35s ease 0s; opacity:0;}
 .re1:hover .capsan {-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);-webkit-transform:scale(1); transform:scale(1); opacity:1;}
 .re1:hover img {opacity:0.7;}
  .re1 .capsan span {position:absolute; top:50%; left:0px; width:100%; text-align:center; line-height:30px; font-size:20px; color:#000000; margin-top:-15px;}
 </style>
</head>

<body>

<div class="main" style="background-color:#E5E4E2">

	<div class="first-section">
			
	
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
 			<!-- Indicators -->
	 			<ol class="carousel-indicators">
 					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 					<li data-target="#myCarousel" data-slide-to="1"></li>
 					<li data-target="#myCarousel" data-slide-to="2"></li>
 				</ol>
 				<!-- Wrapper for slides -->
 				<div class="carousel-inner" >
 					<div class="item active" style="background-image: url('images/pm_pics.png');">
 	 					<?php include 'header.html'; ?>
 	 					<p style="padding: 200px;font-size: 30px" >Election 2020-2021</p>
 					</div>
 					<div class="item" style="background-image: url('images/cm_pics.png');">
		 				<?php include 'header.html'; ?> 
		  				<p style="padding: 200px;font-size: 30px" >Election 2020-2021</p>
 					</div>
 					<div class="item" style="background-image: url('images/pm2.jpg');background-repeat: no-repeat;">
 		 				<?php include 'header.html'; ?>
 		  				<p style="padding: 200px;font-size: 30px" >Election 2020-2021</p>
 					</div>
 				</div>
 				<!-- Left and right controls -->
 					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
 						<span class="glyphicon glyphicon-chevron-left"></span>
 						<span class="sr-only">Previous</span>
 					</a>
 					<a class="right carousel-control" href="#myCarousel" data-slide="next">
 						<span class="glyphicon glyphicon-chevron-right"></span>
 						<span class="sr-only">Next</span>
 					</a>
			</div>
	</div>

	<div class="container-fluid" id="candidate" style="background-color:white;margin: 20px;margin-top: 0px">
		<div class="row">
			<div class="col-sm-12">
				 <p style="margin-top: 15px;"><b><h3><center>Political Parties</center></h3></b></p>
				 <p style="margin-top: 15px;"><b><h3><center>Political Parties</center></h3></b></p>
			</div>
		</div><br>
		<div class="row" >
			<div class="col-sm-4">
				<a href=""><img src="images/bjp.png" width="410px" height="300px"></a><br/><br/>
				<p><center><b>Bharatiya Janata Party(BJP)</b></center></p>
			</div>
			<div class="col-sm-4">
				<a href=""><img src="images/cong1.jpg" width="410px" height="300px"></a><br><br>
				<p><center><b>Indian National Congress(INC)</b></center></p>
			</div>
			<div class="col-sm-4">
				<a href=""><img src="images/ncp.jpg" width="410px" height="300px"></a><br><br>
				<p><center><b>Nationalist Congress Party(NCP)</b></center></p>
			</div>
		</div>
	</div>




	<div class="container-fluid result" id="Results" style="background-color:white;margin: 20px;margin-top: 0px">
		<div class="row" style="height:300px;width:1310px;background-image: url('images/flag2_new.jpg');background-size: cover;">
			<h2><p style="padding: 90px">Results for the older year will be checkout here area wisw</p></h2>

			<!--<div class="col-sm-12">
				 <p style="margin-top: 15px;"><b><h3><center>Results</center></h3></b></p>
			</div>
		</div><br>
		<div class="row ">
			<div class="col-sm-4">
				<div class= "re1" style="height:300px;width: 410px;background-image: url('images/flag.jpg');background-size: cover;">
					<span class="capsan">
                		<span><b>2020-2021</b></span>
         			</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class= "re1" style="height:300px;width: 410px;background-image: url('images/flag.jpg');background-size: cover;">
					<span class="capsan">
                		<span><b>2019-2020</b></span>
         			</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class= "re1" style="height:300px;width: 410px;background-image: url('images/flag.jpg');background-size: cover;">
					<span class="capsan">
                		<span><b>2018-2019</b></span>
         			</span>
				</div>
			</div>-->
		</div>
	</div>
	<div class="container-fluid" id="Results" style="background-color:white;margin: 20px;margin-top: 0px">
		<div class="row">
			<div class="col-sm-12">
				 <p style="margin-top: 15px;"><b><h3><center>Results</center></h3></b></p>
			</div>
		</div><br>
		<div class="row" >
			<div class="col-sm-4">
				<div style="height:300px;width: 410px;background-image: url('images/flag.jpg');background-size: cover;">
					<p></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div style="height:300px;width: 410px;background-image: url('images/flag.jpg');background-size: cover;">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div style="height:300px;width: 410px;background-image: url('images/flag.jpg');background-size: cover;">
					
				</div>
			</div>
		</div>
	</div>

	
</div>

<div id="loginModal" class="modal fade" role="dialog" >

 	<div class="modal-dialog">
 		<!-- Modal content-->
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">&times;</button>
 				<h4 class="modal-title"><center>Login</center></h4>
 			</div>
 			<div class="modal-body">
 				<form class="form-inlne" role="form">
 					<input type="text" class="form-control" name="id" placeholder="Enter id"><br>
 					<input type="password" class="form-control" name="pwd" placeholder="Password">
 				</form>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-primary" >Login</button>
 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 			</div>
 		</div>
 	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</body>
</html>