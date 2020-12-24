<?php

	include 'connect.php'; 
    $year=$_POST['year'];  
    $area=$_POST['area'];  

	$ans5=$conn->prepare("select * from parties where party_name=:name ");
     $ans5->bindParam(':name',$party);

	$ans5->execute();         
	 for($i=0;$i<$ans5->rowCount();$i++)
                    {
                        $row4=$ans5->fetch();	
                        $party1=$row4['id'];

                    }
    $ans1=$conn->prepare("select * from years where year_list=:year2");
     $ans1->bindParam(':year2',$year);

	$ans1->execute();         
	 for($i=0;$i<$ans1->rowCount();$i++)
                    {
                        $row1=$ans1->fetch();	
                        $year1=$row1['id'];

                    }

	$ans2=$conn->prepare("select * from area where id=:area ");
	 $ans2->bindParam(':area',$area);

	$ans2->execute();         
	 for($i=0;$i<$ans2->rowCount();$i++)
                    {
                        $row2=$ans2->fetch();
                        $area1=$row2['id'];
                    }
	
	$ans3=$conn->prepare("select * from result where year_id=:year1 AND area_id=:area1");
	 $ans3->bindParam(':year1',$year1);
	  $ans3->bindParam(':area1',$area1);

	$ans3->execute();
	$output ="";
	
		 
    if($ans3->rowCount()>0)
    {								
			while($row = $ans3->fetch()) {
				$output .= "{$row['c_id']}";
			}
	}
	else{
		echo "record not found...";
	}
	
	$ans4=$conn->prepare("select * from candidate where id=:output");
	$ans4->bindParam(':output',$output);

	$ans4->execute();
	$output1 ="";
	
    if($ans4->rowCount()>0)
    {
		$output1='<table border="1" width="100%">
					<tr>
						<th colspan="4">Candidate Details</th>
					</tr>';										
			while($row = $ans4->fetch()) {
					$output1 .= "<tr>
					<td>{$row['name']}</td>
					<td rowspan='4'><img src=$row[img] height='130px'></td>
					<td rowspan='3'>{$row['party_id']}</td>
					<td rowspan='4'><a href='can_detail.php?aid={$row['area_id']}&pid={$row['party_id']}'>Details</td>
					</tr>";
					$output1 .= "<tr>
					<td>{$row['contact_no']}</td>
					</tr>";
					$output1 .= "<tr>
					<td>{$row['email']}</td>
					</tr>";
					$output1 .= "<tr>
					<td>{$row['address']}</td>
					<td>{$row['party_id']}</td>
					</tr>";
			}

			$output1 .="</table>";
			$conn=null;
			echo $output1;
	}
	else{
		echo "record not found...";
	}
?>
