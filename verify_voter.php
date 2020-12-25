<?php
include 'connect.php';
session_start();
		$sur_nm=$_REQUEST['sur_nm'];
		$m_nm=$_REQUEST['m_nm'];
		$l_nm=$_REQUEST['l_nm'];
		$tel=$_REQUEST['tel'];
		$email=$_REQUEST['email'];
		$date=$_REQUEST['date'];
		$gender=$_REQUEST['gender'];
		$address=$_REQUEST['address'];
		$pincode=$_REQUEST['pincode'];
		$state=$_REQUEST['state'];
		$city=$_REQUEST['city'];
		$area=$_REQUEST['area'];
		$new1=$_REQUEST['new1'];
		$new2=$_REQUEST['new2'];
		$pwd=$_REQUEST['pwd'];
		$cpwd=$_REQUEST['cpwd'];
		$status='inactive';
				$insertquery=$conn->prepare("insert into voter(id,surname,middle_name,last_name,tel,email,dob,address,pincode,gender,state,city,area,img1,img2,pwd,re_pwd,status)  values(null,:sur_nm,:m_nm,:l_nm,:tel,:email,:date,:address,:pincode,:gender,:state,:city,:area,:new1,:new2,:pwd,:cpwd,:status)");
				$insertquery->bindParam(':sur_nm',$sur_nm);
				$insertquery->bindParam(':m_nm',$m_nm);
				$insertquery->bindParam(':l_nm',$l_nm);
				$insertquery->bindParam(':tel',$tel);
				$insertquery->bindParam(':email',$email);
				$insertquery->bindParam(':date',$date);
				$insertquery->bindParam(':gender',$gender);
				$insertquery->bindParam(':address',$address);
				$insertquery->bindParam(':pincode',$pincode);
				$insertquery->bindParam(':state',$state);
				$insertquery->bindParam(':city',$city);
				$insertquery->bindParam(':area',$area);
				$insertquery->bindParam(':new1',$new1);
				$insertquery->bindParam(':new2',$new2);
				$insertquery->bindParam(':pwd',$pwd);
				$insertquery->bindParam(':cpwd',$cpwd);
				
				$insertquery->bindParam(':status',$status);
				$insertquery->execute();
				if ($insertquery) {
					$_SESSION['reg_voter']=1;	
					header('location:index.php');
				}
				else{
					$_SESSION['reg_voter']=2;	
					header('location:index.php');
				}
			
?>