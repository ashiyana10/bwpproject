<?php
	session_start();
	include 'connect.php';
	if (isset($_POST['login'])) {
		
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$actor=$_POST['actor'];

		if($actor=='Candidate')
		{
			
                    $ans=$conn->prepare("select * from candidate where email=:email AND pwd=:pwd");
                    $ans->bindParam(':email',$email);
                    $ans->bindParam(':pwd',$pwd);
                    $ans->execute();

                    if ($ans->rowCount()!=0) {
                    	$row=$ans->fetch();
                    	
                    	if ( (strcmp($email,$row['email']) == 0) AND (strcmp($pwd,$row['pwd']) == 0))
                    	{
                    		$id=$row['id'];
                    		$_SESSION['cid']=$id;
                    		$_SESSION['login']=1;
                    		header('location:index.php');
                    		
                    	}
    					else
    					{
    						$_SESSION['login']=2;
    						header('location:index.php');
    						
    					}
    				}
    				else{
    					$_SESSION['login']=2;
    					header('location:index.php');
    					
    				}
		}
		else if($actor=='Voter')
		{
			
                    $ans=$conn->prepare("select * from voter where email=:email AND pwd=:pwd");
                    $ans->bindParam(':email',$email);
                    $ans->bindParam(':pwd',$pwd);
                    $ans->execute();

                    if ($ans->rowCount()!=0) {
                    	$row=$ans->fetch();
                    	
                    	if ( (strcmp($email,$row['email']) == 0) AND (strcmp($pwd,$row['pwd']) == 0))
                    	{
                    		$id=$row['id'];
                    		$_SESSION['vid']=$id;
                    		$_SESSION['login']=1;
                    		header('location:index.php');
                    		
                    	}
    					else
    					{
    						$_SESSION['login']=2;
    						header('location:index.php');
    						
    					}
    				}
    				else{
    					$_SESSION['login']=2;
    					header('location:index.php');
    					
    				}
		}	

		

	}
	
