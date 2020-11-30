
<?php
include 'connect.php';
?><!DOCTYPE html>
<html>
<head>
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
     <link rel='stylesheet' href='css/sweet-alert.css'>
        <script src="js/sweetalert.min.js"></script>
 <style type="text/css">
 	body{
 		color: black;
 	}
 	.friends-block{
 		background:url('images/fort.jpg');background-attachment: fixed;
 	}
 	.friends-block:after {position:absolute; top:0px; left:0px; width:100%; height:100%; background-color: orange;opacity: 0.9; content:""; }
 </style>
 <script type="text/javascript">
msg="Hello world......";
pos=0;
maxlength=msg.length+1;
function writemsg()
{
	if(pos<maxlength)
	{
	txt=msg.substring(pos,0);
	document.forms[0].msgtxt.value=txt;
	pos++;
	timer=setTimeout("writemsg()",400);
	}
}
function stoptimer()
{
	clearTimeout(timer);
}
</script>
</head>

<body onload="writemsg()" onunload="stoptimer()">

<div class="main" style="background-color:#E5E4E2">

	<div class="first-section">
			
	
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
 			
	 			<ol class="carousel-indicators">
 					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 					<li data-target="#myCarousel" data-slide-to="1"></li>
 					<li data-target="#myCarousel" data-slide-to="2"></li>
 				</ol>
 				<!-- Wrapper for slides -->
 				<div class="carousel-inner" >
 					<div class="item active" style="background-image: url('images/pm_pics.png');">
 	 					<?php include 'header.php'; ?>
 	 					<p style="padding: 200px;font-size: 30px;color: blue" ><b>Voting For the 2020-21 link available here....</b></p>
 					</div>
 					<div class="item" style="background-image: url('images/pm_pics.png');">
		 				<?php include 'header.php'; ?> 
		  				<p style="padding: 200px;font-size: 30px;color: green"><b>Show the Results of the current year after<br> the election 5 hour...</b></p>
 					</div>
 					<div class="item" style="background-image: url('images/pm2.jpg');background-repeat: no-repeat;">
 		 				<?php include 'header.php'; ?>
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
	</div><br><br>


	<div class="container-fluid" >
		<center><p><h2><b>About Us</b></h2></p></center><br><br>
		<div class="row" style="background-image: url(images/bg5.jpg);background-repeat: no-repeat;background-size: cover;">
			<div class="col-sm-12">
				<p></p>
				<p style="margin: 100px;font-size: 20px">Online voting is a way of casting a vote or opinion online, via electronic means. It is a preferred voting channel for many organisations running board, council or committee elections, referendums, polls or AGMs, due to its ease and flexibility. With voter encryption and different levels of voter security, our online voting system offers the most secure system on the market. In addition, our online voting system can be branded with a client’s logo, colour scheme and imagery to make it recognisable and appealing to the voter.<br>
					We also offer different voting methods as part of our online voting package. <br>Voting methods include the Single Transferable Vote (STV), First Past the Post (FPTP), and AGM Voting.<br><br>
				<a href="about.php"><button class="btn btn-warning" style="border-radius: 50px;background-color: #2B3856;" align="right"><b style="font-size: 20px">&nbsp;&nbsp;&nbsp;Learn More&nbsp;&nbsp;&nbsp;</b></button></a>
			</p>

			</div>
		</div>
	</div><br><br>








	<div class="container-fluid" id="candidate" style="background-color:white;margin: 20px;margin-top: 0px">
		<div class="row">
			<div class="col-sm-10">
				 <center><p style="margin-top: 15px;"><b><h3 style="margin-left: 200px">Political Parties</h3></b></p></center>
			</div>
			<div class="col-sm-2">
				<button class="btn btn-success" style="margin-top: 15px;background-color:#2B3856">&nbsp;&nbsp;<b style="font-size: 18px">Show All</b>&nbsp;&nbsp;</button>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-4">
				<a href="candidat.php"><img src="images/bjp.png" width="410px" height="300px"></a><br/><br/>
				<p><center><b>Bharatiya Janata Party(BJP)</b></center></p>
			</div>
			<div class="col-sm-4">
				<a href="candidat.php"><img src="images/cong1.jpg" width="410px" height="300px"></a><br><br>
				<p><center><b>Indian National Congress(INC)</b></center></p>
			</div>
			<div class="col-sm-4">
					<a href="candidat.php"><img src="images/ncp.jpg" width="410px" height="300px"></a><br><br>
					<p><center><b>Nationalist Congress Party(NCP)</b></center></p>
			</div>
		</div><br>
	</div>




	<div class="container-fluid result" id="Results" style="background-color:white;margin: 20px;margin-top: 0px">
		<div class="row" style="height:300px;width:1310px;background-image: url('images/flag2_new.jpg');background-size: cover;">
			<div class="col-sm-12">
				<h2><p style="padding: 90px">Results for the older year will be checkout here area wise</p></h2>
			</div>

		</div>	
	</div>



	 <section class="friends-block" style="">
            <div class="container">
                <div class="sub-title">
                    <!--<div class="icon"><em class="icon icon-heading-icon"></em></div>-->
                    <div class="img"><img src="images/heading-blackBgimg.png" alt=""></div>
                    <h2>Total Seats Of All Parties</h2>
                    <div class="img"><img src="images/heading-blackBgimg.png" alt=""></div>
                </div>
                <div id="friend_slider" class="carousel">
                <?php
                     
                     
                    
                    $ans=$conn->prepare("select * from parties");
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                ?>

                    <div class="item">
                        <div class="friends-info">
                            <div class="friend-img">
                                <div class="img"><img src="<?php echo $row['img'] ?>" alt=""></div>
                                <div class="img-fream"><img src="images/ag.jpg" alt=""></div>
                                <div class="name"><?php echo $row['party_name']; ?></div>
                            </div>
                            <div class="text">
                                <p><img src="images/starting-point.png" alt="" class="start-img"><?php echo $row['party_name']; ?> Has a <?php echo $row['current_total_seat']; ?> Total Seat In India<img src="images/ending-point.png" alt="" class="end-img"></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>

                    
                </div>
            </div>
        </section>




	
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




    <script type="text/javascript" src="js/owl.carousel.js"></script>

    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>


    <script type="text/javascript" src="js/coustem.js"></script>

</body>
</html>