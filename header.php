<?php

include 'connect.php';
?>

<div class="header" style="">
			<div class="row nav">
				<div class="col-md-4 header-first">
					<img src="images\logo1.png" height="100px" width="200px">
				</div>
				<div class="nav_link">
					<div class="col-md-1">
						<div class="dropdown">
							<a href="index.php" style="color: black;font-size: 18px"><b>Home</b>&nbsp;<b class="fas fa-angle-down"></b></a>
							<div class="dropdown-content">
   								<a href="#">Link 1</a>
    							<a href="#">Link 2</a>
    							<a href="#">Link 3</a>
  							</div>
						</div>
					</div>
					
					<div class="col-md-1">
						<a href="about.php" style="color: black;font-size: 18px"><b>About</b></a>&nbsp;<b class="fas fa-angle-down"></b>
					</div>
				
					
					<div class="col-md-1">
						<a href="candidat.php" style="color: black;font-size: 18px"><b>Candidate</b></a>
					</div>
					<div class="col-md-1">
						<a href="result.php" style="color: black;font-size: 18px"><b>Result</b>&nbsp;<b class="fas fa-angle-down"></b></a>
					</div>
					

					<?php
				
					if ((isset($_SESSION['vid'])) or (isset($_SESSION['cid']))) {
						
					?>
					<div class="col-md-1">
						<a href="profile.php"><p style="color: black;font-size: 18px"><i class="fas fa-user-circle"></i>&nbsp;<b>Profile</b>&nbsp;</p></a>
					</div>
					<div class="col-md-1">
						<a href="logout.php"><p style="color: black;font-size: 18px"><i class="fas fa-user-slash"></i><b>Logout</b></p></a>
					</div>
				<?php }
				else{?>
					<div class="col-md-1">
						<a href="apply.php" style="color:black;font-size: 18px"><i class="fas fa-user-plus"></i>&nbsp;<b>Apply</b>&nbsp;</a>
					</div>
					<div class="col-md-1">
						<a href="javascript:;" style="color: black;font-size: 18px"  data-toggle="modal" data-target="#loginModal"><i class="fas fa-user"></i>&nbsp;<b>Login</b>&nbsp;</a>
					</div>
					<?php
				} ?>
				</div>
			</div>
		</div>



