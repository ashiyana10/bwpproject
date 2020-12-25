
<center>
<?php
include 'connect.php';
session_start();
$code=rand(22222,99999);
$_SESSION["code"]=$code;
$year=$_REQUEST['year'];
$cid=$_REQUEST['cid'];
$vid=$_REQUEST['vid'];
$_SESSION["year"]=$year;
$_SESSION["cid"]=$cid;
//$_SESSION[""]=$lastname;
                      $ans=$conn->prepare("select *from vote_store where year=:year AND voter_id=:vid");
                          $ans->bindParam(':vid',$vid);
                          
                          $ans->bindParam(':year',$year);

                          $ans->execute();
                          if($ans->rowCount()>0)
                          {
                            $_SESSION['already_vote']=1;
                            header('location:index.php');
                          }
                        $ans1=$conn->prepare("select * from voter where id=:vid");
                          $ans1->bindParam(':vid',$vid);
                          $ans1->execute();
                          while($row1=$ans1->fetch())
                          {
                            $email=$row1['email'];
                            $_SESSION['email']=$email;
                          }










require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 0;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "ashiyanahalvadiya123@gmail.com";
  $mail->Password = "ashu10111";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "ashiyanahalvadiya123@gmail.com";
  $mail->FromName = "Ashiyana";
  
  $mail->addAddress($email);
  
  $mail->isHTML(true);
 $mail->addAttachment('lop.jpg', 'lop1.jpg'); //set new name

 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your OTP:</i>".$code;
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "<h1>OTP has been send succesfully in Your email Id please checkout </h1>";

   ?>
   
   <form action="mail2.php" method="post">

<input name="captcha" type="text">


<input type="submit" name="submit" value="submit">
</form>
   
 <?php 


  }
  ?>
 
  
  

 </center> 
  
  
  
  