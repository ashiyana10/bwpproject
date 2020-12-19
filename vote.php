
<?php
session_start();
include 'connect.php';
if (isset($_SESSION['vid'])) {
	$vid=$_SESSION['vid'];
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>E-voting</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 



 
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/styles.css" rel="stylesheet" /><!-- font css --> 


    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->
    
    
    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet"> 
    <script type="text/javascript" src="js/search1.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
     <link rel="stylesheet" type="text/css" href="search.css">
     <link rel="stylesheet" href="css/sweet-alert.css">
        <script src="js/sweetalert.min.js"></script>
</head>
<body>
	<?php
	include 'header.php';
	include 'modal.php';
	$sid=$_REQUEST['sid'];
	?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>


	
	<?php
}
else{
	$_SESSION['login_first']=1;
	header('index.php');
}


?>