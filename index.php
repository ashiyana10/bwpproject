<?php
include 'connect.php';

session_start();
if (isset($_SESSION['vid'])) {
    $vid=$_SESSION['vid'];
}

                    $ans=$conn->prepare("select * from voter where id=:vid");
                    $ans->bindParam(':vid',$vid);
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                        $aid=$row['area'];
                    }
                    $ans=$conn->prepare("select * from area where id=:aid");
                    $ans->bindParam(':aid',$aid);
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                        $sid=$row['state_id'];
                    }



?>
<!DOCTYPE html>
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
     <link rel="stylesheet" href="css/sweet-alert.css">
        <script src="js/sweetalert.min.js"></script>
 <style type="text/css">
 	body{
 		color: black;
 	}
 	.friends-block {display:block; width:100%; background:url(images/fort.jpg) no-repeat 50% 50%; background-size:cover; padding:33px 0 63px 0; background-attachment:fixed; position:relative;}
.friends-block:after {position:absolute; top:0px; left:0px; width:100%; height:100%; background-color: orange;opacity: 0.9; content:""; }
 </style>
 
</head>

<body>

<div class="main" style="background-color:#E5E4E2">

	<div class="first-section">
			
	
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
 			
	 			<!--<ol class="carousel-indicators">
 					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 					<li data-target="#myCarousel" data-slide-to="1"></li>
 					<li data-target="#myCarousel" data-slide-to="2"></li>
 				</ol>-->
 				<!-- Wrapper for slides -->
 				<div class="carousel-inner" >
                    <?php
                    $ans=$conn->prepare("select * from slider");
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        include 'modal.php';
                        $row=$ans->fetch();
                        ?>

         					<div class="item active" style="background-image: url('<?php echo $row['img'] ?>');">
         	 					<?php include 'header.php'; ?>
                                <div class="row" style="padding: 150px;padding-bottom: 20px">
                                    <div class="col-sm-9">
         	 					        <p style="font-size: 32px;color: blue" ><b><?php echo $row['detail']; ?></b><br>
                                        <button class="btn btn-danger" style="font-size: 24px" onclick="vote()">Give Vote</button></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered text-center" style="border-radius: 0.9em; background-color: white; margin-left: 150px;margin-bottom:50px;border-width: 2px;width: 80%">  
                                            <thead >
                                              
                                            </thead>
                                                <tbody id="response" style="font-size: 16px;">
                                                
                                                </tbody>
                                        </table> 
                                    </div>
                                </div>
         					</div>
                         <?php
                                                
                }?>
 				</div>
 				<!-- Left and right controls -->
 					<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
 						<span class="glyphicon glyphicon-chevron-left"></span>
 						<span class="sr-only">Previous</span>
 					</a>
 					<a class="right carousel-control" href="#myCarousel" data-slide="next">
 						<span class="glyphicon glyphicon-chevron-right"></span>
 						<span class="sr-only">Next</span>
 					</a>-->
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
				<a href="candidat.php"><button class="btn btn-success" style="margin-top: 15px;background-color:#2B3856">&nbsp;&nbsp;<b style="font-size: 18px">Show All</b>&nbsp;&nbsp;</button></a>
			</div>
		</div><br>
		<div class="row">
			<?php
                    $ans=$conn->prepare("select * from parties limit 3");
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                ?>
		
			<div class="col-sm-4">
				<a href="candidat.php"><img src="<?php echo $row['img']; ?>" width="400px" height="300px"></a><br/><br/>
				<p><center><b><?php echo $row['party_name']; ?></b></center></p>
			</div>
			<?php } ?>	
		</div><br>
	</div>




	<div class="container-fluid result" id="Results" style="background-color:;margin: 20px;margin-top: 0px">
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




<?php
        
                  if (isset($_REQUEST['login_first'])) {
              ?>
                   <script type="text/javascript">
                           
                            swal({
                                  text: "First U Login...",
                                  
                                  }).then(function() {
                                  // Redirect the user
                                  window.location.href = "index.php";
                                  //console.log('The Ok Button was clicked.');
                                  });
                   </script>
                   
                 <?php
                 
        }
        if (isset($_REQUEST['active_status'])) {
            ?>
                 <script type="text/javascript">
                         
                         swal({
                                text: "Your Account Not Verified at Admin Site....",
                                
                                }).then(function() {
                                // Redirect the user
                                window.location.href = "index.php";
                                //console.log('The Ok Button was clicked.');
                                });
                 </script>
                 
                 <?php
                 
        }
        if (isset($_REQUEST['valid_state'])) {
            $snm=$_REQUEST['snm'];
            ?>

                 <script type="text/javascript">

                          swal({
                                text: "You Are Not Belong to That State",
                                
                                }).then(function() {
                                // Redirect the user
                                window.location.href = "index.php";
                                //console.log('The Ok Button was clicked.');
                                });
                 </script>
                 
                 <?php
                 
        }


if(isset($_SESSION['already_vote']))
        {
            
                 ?>
                 <script type="text/javascript">
                         swal("Already You Give a Vote....");
                 </script>
                 
                 <?php
          unset($_SESSION['already_vote']);
          }

        




	 if(isset($_SESSION['login']))
        {
            $a=$_SESSION['login'];
            if ($a==1) {
                 ?>
                 <script type="text/javascript">
                         swal("Login Successfully....");
                 </script>
                 
                 <?php
                    
                }
                else if($a==2)
                {                
                    ?>
                    <script type="text/javascript">
                         swal("Login Unsuccessfully....");
                 </script>
                 <?php
                 
                
                }
        unset($_SESSION['login']);
        }



         if(isset($_SESSION['reg_voter']))
        {
            $a=$_SESSION['reg_voter'];
            if ($a==1) {
                 ?>
                 <script type="text/javascript">
                         swal("Registation  Successfully....");
                 </script>
                 
                 <?php
                    
                }
                else if($a==2)
                {                
                    ?>
                    <script type="text/javascript">
                         swal("Registation Unsuccessfully....");
                 </script>
                 <?php
                 
                
                }
        unset($_SESSION['reg_voter']);
        }
       
	
?>
<script type="text/javascript">
   function vote(){
     
       
      $.ajax({
        url:"current_vote.php",
        type:"POST",

        //data:{state:'state',city:'state_list'},
        
        success:function(response){
          $("#response").html(response);
        }

      });
    
    }
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 




    <script type="text/javascript" src="js/owl.carousel.js"></script>

    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>


    <script type="text/javascript" src="js/coustem.js"></script>

</body>
</html>