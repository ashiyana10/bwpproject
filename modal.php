<div id="loginModal" class="modal fade" role="dialog" >

 	<div class="modal-dialog">
 		<!-- Modal content-->
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">&times;</button>
 				<h4 class="modal-title"><center>Login</center></h4>
 			</div>
 			<div class="modal-body">
 				<form class="form-inlne" role="form" action="login.php " method="POST" enctype="multipart/form-data">
 					<select class="form-control" name="actor">
 						<option hidden="true">select</option>
 						<option>Candidate</option>
 						<option>Voter</option>
 					</select><br>	
 					<input type="email" class="form-control" name="email" placeholder="E-mail"><br>
 					<input type="password" class="form-control" name="pwd" placeholder="Password">
 					<div class="modal-footer">
 						<input type="submit" name="login" value="Login" class="btn btn-primary">
 						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 					</div>
 				</form>
 			</div>
 			
 		</div>
 	</div>
</div>
