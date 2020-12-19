<?php

	include 'connect.php';
    $city=$_POST['city'];
    $state=$_POST['state'];
    $ans=$conn->prepare("select * from area where state_id=:state AND city_id=:city ");
     $ans->bindParam(':city',$city);
     $ans->bindParam(':state',$state);
     $ans->execute(); 
     $output="";        
	 if($ans->rowCount()>0
                    {
                    	$output='<select class="form-control"  name="area" style="width: 100%">
                    		<option hidden="true">Select</option>';
                        while($row=$ans->fetch())
                        {
                        	$output .= "<option value='<?php echo $row['id']; ?>'><?php echo $row['area_name']; ?></option>";
                        }	
                 $output .="</select>";
			$conn=null;
			echo $output;
	}
	else{
		echo "record not found...";
	}

	?>