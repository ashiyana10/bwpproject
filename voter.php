<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include 'connect.php';
if(isset($_GET['submit']))
{
try{
	
	$sur_nm=$_GET['sur_nm'];
	$m_nm=$_GET['m_nm'];
	$l_nm=$_GET['l_nm'];
	$tel=$_GET['tel'];
	$email=$_GET['email'];
	$date=$_GET['date'];
	$gender=$_GET['gender'];
	$address=$_GET['address'];
	$pincode=$_GET['pincode'];
	$state=$_GET['state'];
	$city=$_GET['city'];
	$img1=$_FILES['file1']['name'];
	$img2=$_FILES['file2']['name'];

	
		$path1=move_uploaded_file($_FILES['img1']['tmp_name'],"upload/".$img1);
		$path2=move_uploaded_file($_FILES['img2']['tmp_name'],"upload/".$img2);
		$new1="upload/".$img1;
		$new2="upload/".$img2;
		$status=0;
		$ins=$conn->prepare("insert into voter(id,surname,middle_name,last_name,tel,email,dob,address,pincode,gender,state,city,img1,img2,status)  values(null,:sur_nm,:m_nm,:l_nm,:tel,:email,:date,:address,:pincode,:gender,:state,:city,:new1,:new2,:status)");
	$ins->bindParam(':sur_nm',$sur_nm);
	$ins->bindParam(':m_nm',$m_nm);
	$ins->bindParam(':l_nm',$l_nm);
	$ins->bindParam(':tel',$tel);
	$ins->bindParam(':email',$email);
	$ins->bindParam(':date',$date);
	$ins->bindParam(':gender',$gender);
	$ins->bindParam(':address',$address);
	$ins->bindParam(':pincode',$pincode);
	$ins->bindParam(':state',$state);
	$ins->bindParam(':city',$city);
	$ins->bindParam(':new1',$new1);
	$ins->bindParam(':new2',$new2);
	$ins->bindParam(':status',$status);

	$ins->execute();

	//include 'index.php';

}
catch(PDOException $e)
	{
		    echo $e->getMessage();
   }

  }
?>


</body>
</html>