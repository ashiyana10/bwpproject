<?php

use Phppot\StateCity;
require_once __DIR__ . '/combobox/CountryState.php';
$countryState = new StateCity();
$countryResult = $countryState->getAllState();
?> 
<!DOCTYPE html>  
<html lang="en">  
  <head>  
     <title>Candidate Detail</title>  
     <link rel="stylesheet" type="text/css" href="index.css">
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
     <style type="text/css">
      body{
        background-image: url(images/candidate_bg.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

      }
     </style>
     <script src="./combobox/jquery-3.2.1.min.js" type="text/javascript"></script>
     <script>
function getCity(val) {
    $("#loader").show();
  $.ajax({
  type: "POST",
  url: "./combobox/get-country-state-ep.php",
  data:'state_id='+val,
  success: function(data){
    $("#state-list").html(data);
    $("#loader").hide();
  }
  });
}
</script>
  </head>  
  <body> 
  
    <?php include "header.html"; 
    include "connect.php"; ?>
  <div class="container">

    <p><b><center><h3>Select Particular Candidate</h3></center></b></p>
  </div><br><br>
  
  <div class="middle container">
    <form class="form-inline">
      <div class="row">
        <div class="col-sm-4">
          <label>Select Parties</label>
          <select name="cars" id="cars" class="form-control" style="width: 100%">
            <option value="select" hidden>Select</option>
            <?php 
            $ans=$conn->prepare("select * from Parties");
                    $ans->execute();
                    for($i=0;$i<$ans->rowCount();$i++)
                    {
                        $row=$ans->fetch();
                ?>
            <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option><?php } ?>
            </select>
        </div>
        <div class="col-sm-4">
          <label>Select States</label>
          <select name="cars" id="cars" class="form-control" style="width: 100%" onChange="getCity(this.value);">
            <option value="select" hidden>Select</option>
            <?php
            foreach ($countryResult as $country) {
            ?>    
            <option value="<?php echo $country["id"]; ?>"><?php echo $country["state_name"]; ?></option>
            <?php
            }
            ?></select>
        </div>
        <div class="col-sm-4">
          <label>Select Cityes</label>
          <select name="cars" id="state-list" class="form-control" style="width: 100%">
            <option value="select" hidden>Select</option>
           
          </select>
        </div>
    </form>
  </div><br>

<div class="containe">  
  <h4><b>Choose Area</b></h4>  <br>
  
<table class="table table-hover" style="border-color: black">  
  <tr><th>Area Code</th><th>Area Name</th><th>Age</th></tr>  
  <tr><td><a href="can_detail.php">101</a></td><td>Rahul</td><td>23</td></tr>  
  <tr><td>102</td><td>Umesh</td><td>22</td></tr>  
  <tr><td>103</td><td>Max</td><td>29</td></tr>  
  <tr><td>104</td><td>Ajeet</td><td>21</td></tr>  
</table>  
  
</div>  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  </body>  
</html>  

 
