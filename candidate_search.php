<?php

	include 'connect.php';
    $state=$_POST['state'];
    $city=$_POST['city'];  
    $party=$_POST['party'];  

    $ans4=$conn->prepare("select * from parties where party_name=:name ");
     $ans4->bindParam(':name',$party);

	$ans4->execute();         
	 for($i=0;$i<$ans4->rowCount();$i++)
                    {
                        $row4=$ans4->fetch();	
                        $party1=$row4['id'];

                    }

    
    $ans1=$conn->prepare("select * from states where id=:state ");
     $ans1->bindParam(':state',$state);

	$ans1->execute();         
	 for($i=0;$i<$ans1->rowCount();$i++)
                    {
                        $row1=$ans1->fetch();	
                        $state1=$row1['id'];

                    }

	$ans2=$conn->prepare("select * from cityes where id=:city ");
	 $ans2->bindParam(':city',$city);

	$ans2->execute();         
	 for($i=0;$i<$ans2->rowCount();$i++)
                    {
                        $row2=$ans2->fetch();
                        $city1=$row2['id'];
                    }
	
	$ans3=$conn->prepare("select * from area where state_id=:state1 AND city_id=:city1");
	 $ans3->bindParam(':state1',$state1);
	  $ans3->bindParam(':city1',$city1);

	$ans3->execute();
	$output ="";
	
		 
    if($ans3->rowCount()>0)
    {
		$output='<table border="1"  width="100%" cellspacing="0" cellpadding="10px">
					<tr>
						<th>Area Name</th>
						<th>Detail</th>

					</tr>';										
					while($row3=$ans3->fetch()){
						$output .= "<tr><td>{$row3['area_name']}</td><td><a href='can_detail.php?aid={$row3['id']}&pid=$party1'>Detail</td></tr>";
					}

			$output .="</table>";
			$conn=null;
			echo $output;
	}
	else{
		echo "record not found...";
	}


?>