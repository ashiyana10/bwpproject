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
						$c_sid=$row['state_id'];
						$year=$row['year'];
						$ans1=$conn->prepare("select * from states where id=:c_sid");
						$ans1->bindParam(':c_sid',$c_sid);
						$ans1->execute(); 
						$states=$ans1->rowCount();
						
						while($row1=$ans1->fetch())
						{
							$states=$ans1->rowCount();

							$sid=$row1['id'];
								if (isset($_SESSION['vid'])) 
								{
									$vid=$_SESSION['vid'];
									$ans2=$conn->prepare("select * from voter where id=:vid AND status=:status");
									$status='active';
									$ans2->bindParam(':vid',$vid);
									$ans2->bindParam(':status',$status);
									$ans2->execute(); 
											while($row2=$ans2->fetch())
											{
												
												$vstate=$row2['state'];

											}
											//echo $vstate;
											if($ans2->rowCount()>0)
											{
												//echo $vstate;
												//echo $c_sid;
												if($vstate==$c_sid)
												{
												//	echo "hi";

													$output .= "<tr><td>{$row1['state_name']}</td><td><a href='vote.php?year=$year '>Give Vote</a></td></tr>";
												}
												else
												{
												//	echo "hi1";
													
													$output .= "<tr><td>{$row1['state_name']}</td><td><a href='index.php?valid_state=1'>Give Vote</a></td></tr>";	
													
												}

											}
											else
											{
												
												$output .= "<tr><td>{$row1['state_name']}</td><td><a href='index.php?active_status=1'>Give Vote</a></td></tr>";	
											}
										}
								else{
										
										$output .= "<tr><td>{$row1['state_name']}</td><td><a href='index.php?login_first=1'>Give Vote</a></td></tr>";	
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