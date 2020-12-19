
<?php
session_start();
use Phppot\StateCity;

require_once __DIR__ . '/combobox/CountryState.php';
$countryState = new StateCity();

$countryResult = $countryState->getAllState();

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
 		.opacity1{
 			opacity: 0.7;
 		}
 	</style>
 	<script src="./combobox/jquery-3.2.1.min.js" type="text/javascript"></script>
 	<script src="js/sweetalert.min.js"></script>
 	 <script>
function getCity(val) {
    $("#loader").show();
  $.ajax({
  type: "POST",
  url: "./combobox/get-country-state-ep.php",
  data:'state_id='+val,
  success: function(data){
    $("#state_list").html(data);
    $("#loader").hide();
  }
  });
}

function getArea(val){
     
     $("#loader").show();
      $.ajax({
        
        type:"POST",
        url:"./combobox/get-state-city-ep.php",
        //data:{state:'state',city:'state_list'},
        data:'city_id='+val,
        success:function(data){
          $("#area_list").html(data);
          $("#loader").hide();
        }

      });
    
    }


</script>
</head>
<body background="images\fort.jpg" style="background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">

<?php
	include 'connect.php';
	if (isset($_POST['submit'])) {
		
		$sur_nm=$_POST['sur_nm'];
		$m_nm=$_POST['m_nm'];
		$l_nm=$_POST['l_nm'];
		$tel=$_POST['tel'];
		$email=$_POST['email'];
		$date=$_POST['date'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$pincode=$_POST['pincode'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$img1=$_FILES['file1']['name'];
		$img2=$_FILES['file2']['name'];
		$pwd=$_POST['pwd'];
		$cpwd=$_POST['cpwd'];
		//$pwd=password_hash($pwd, PASSWORD_BCRYPT);
		//$cpwd=password_hash($cpwd, PASSWORD_BCRYPT);
		
		$token=bin2hex(random_bytes(15));
		$status="inactive";

		$path1=move_uploaded_file($_FILES['file1']['tmp_name'],"upload/".$img1);
		$path2=move_uploaded_file($_FILES['file2']['tmp_name'],"upload/".$img2);
		$new1="upload/".$img1;
		$new2="upload/".$img2;

		$emailquery=$conn->prepare("select *from voter where email=:email");
		$emailquery->bindParam(':email',$email);
		$emailquery->execute();
		$count=$emailquery->rowCount();
		$emailquery1=$conn->prepare("select *from candidate where email=:email");
		$emailquery1->bindParam(':email',$email);
		$emailquery1->execute();
		$count1=$emailquery1->rowCount();
		if(($count>0) OR ($count1>0)) 
		{
			?>
			<script type="text/javascript">
						swal("Your Email Address Already Register");
					</script>
					<?php
		}
		else
		{
			if($pwd==$cpwd)
			{
				require 'phpmailer/PHPMailerAutoload.php';
					$mail= new PHPMailer;
					$mail->Host='smtp.gmail.com';
					$mail->Port=587;
					$mail->isSMTP();
					$mail->SMTPAuth=true;
					$mail->SMTPSecure='tls';
					$mail->Username='ashiyanahalvadiya123@gmail.com';//Your Email Address
					$mail->Password='ashu10111';//Your Email Password
					$mail->setFrom('ashiyanahalvadiya123@gmail.com','Notification');
					$mail->addAddress($email);//Receiver Email
					$mail->addReplyTo('ashiyanahalvadiya123@gmail.com');
					$mail->isHTML(true);
					$mail->Subject='Verify Your Email Address';
					
					$mail->Body='<a href="localhost/bwpproject/verify_voter.php?sur_nm=$sur_nm&m_nm=$m_nm&l_nm=$l_nm&tel=$tel&email=$email&date=$date&gender=$gender&address=$address&pincode=$pincode&state=$state&city=$city&new1=$new1&new2=$new2&pwd=$pwd&cpwd=$cpwd"><h1>Click on the link to verify ur email...</h1></a>';
					if(!$mail->send())
					{
					echo "Something went wrong";
					echo $mail->ErrorInfo;
					}
					else
					{
						?>
						<script type="text/javascript">
							swal('check your mail');
						</script>
						<?php
					}
			}
			else{
				?>
				<script type="text/javascript">
					swal('password does not match')
				</script>
				<?php
			}
			
		}
		

	}






?>




	<?php include "header.php";
	include "modal.php"; ?>
<div class="container"><br><br>
	<div class="jumbotron opacity1">
		<center> <h3>Apply For Voter Or Candidate</center><br><br>
		<form class="form-inline" role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
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
					<input type="tel" name="tel" class="form-control" placeholder="Contact No" style="width: 100%" max="10">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" style="width: 100%">
					<span id="email_error"></span>
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
					<select class="form-control" name="state" id="state" style="width: 100%" onChange="getCity(this.value);">
						<option hidden="">Select</option>
						<?php
            				foreach ($countryResult as $country) {
            			?>    
           				<option value="<?php echo $country["id"]; ?>"><?php echo $country["state_name"]; ?></option>
            			<?php
            				}
            			?>
					</select>
				</div>
			</div><br>
			Current City:<br>
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control" id="state_list" name="city" style="width: 100%" onChange="getArea(this.value);">
						<option hidden="">Select</option>
						
					</select>
				</div>
			</div><br>

			 Current Area:<br>
			<div class="row">
				<div class="col-sm-12">
					<select class="form-control" id="area_list"  name="area" style="width: 100%">
						<option hidden="">Select</option>
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
					<input type="file" name="file1" class="form-control" style="width: 100%" data-validation="required" data-validation-error-msg="Please Choose File">
				</div>
			</div><br>
			Back Page:
			<div class="row">
				<div class="col-sm-12">
					<input type="file" name="file2" class="form-control" style="width: 100%" data-validation="required" data-validation-error-msg="Please Choose File">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="password" name="pwd" class="form-control" style="width: 100%" placeholder="Password">
				</div>				
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<input type="password" name="cpwd" class="form-control" style="width: 100%" placeholder="Re-Type Password">
				</div>				
			</div><br>
			<div class="row">
				<div class="col-sm-4">
					<input type="submit" class="btn btn-primary form-control" style="width: 100%" name="submit" value="Submit">
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
<script type="text/javascript">
   
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    

</body>
</html>