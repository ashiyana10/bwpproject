<?php
include 'connect.php';
session_start();
	$ans=$conn->prepare("select * from current_voting ");
	$ans->execute();   
	$output ="";      
	if($ans->rowCount()>0)
    {
    	$output='<table border="1" class="table table-bordered text-center" width="100%" cellspacing="0" cellpadding="10px">
					';	

					while($row=$ans->fetch()){
						$sid=$row['state_id'];
					
						$ans1=$conn->prepare("select * from states where id=:sid");
						$ans1->bindParam(':sid',$sid);
						$ans1->execute(); 
						while($row1=$ans1->fetch())
						{
							if (isset($_SESSION['vid'])) {
								$output .= "<tr><td>{$row1['state_name']}</td><td><a href='vote.php?sid=$sid'>Give Vote</a></td></tr>";
							}
							else{
								$_SESSION['login_first']=1;
								$output .= "<tr><td>{$row1['state_name']}</td><td><a href='index.php'>Give Vote</a></td></tr>";	
							}
						}
					}
    				$output .="</table>";
			$conn=null;
			echo $output;
	}
	else{
		echo "record not found...";
	}







?>