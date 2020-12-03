<?php
include 'connect.php';
$email=$_POST['email'];
$ans=$conn->prepare("select * from voter where email:=email");
					$ans->bindParam(':email',$email);
                    $ans->execute();
                    if($ans->rowCount()>0)
                    {
                    	echo "yss";
                    }
                    else{
                    	echo "no";
                    }
                ?>


?>