
<center>
<br>
<br>
<br>
<br>
<br>


<?php
session_start();
$code="";



include 'connect.php';


if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo $captcha=$_POST['captcha'];
echo "<br>";
echo "Correct Code Entered";
if(isset($_SESSION['email'])) {
  echo "Your session is running " . $_SESSION['email'];

$year=$_SESSION['year'];
$cid=$_SESSION['cid'];
$vid=$_SESSION['vid'];
				
                          
								$ans2=$conn->prepare("insert into vote_store(year,candidate_id,voter_id) values(:year,:cid,:vid)");
		                          $ans2->bindParam(':vid',$vid);
		                          $ans2->bindParam(':cid',$cid);
		                          $ans2->bindParam(':year',$year);

			                          $ans2->execute();
			              


}




unset($_SESSION['year']);
unset($_SESSION['cid']);
//Do you stuff
}
else
{
echo "Wrong Code Entered Try Again";



?>




 <form action="mail2.php" method="post">

<input name="captcha" type="text">

<input type="submit" name="submit" value="submit">
</form>





  
  

<?php } ?>

<a href="index.php">Index</a>
</center>
<center>



</center>