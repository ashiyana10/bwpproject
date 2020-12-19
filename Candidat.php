<?php
session_start();
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
    $("#state_list").html(data);
    $("#loader").hide();
  }
  });
}
</script>
  </head>  
  <body> 
  
    <?php include "header.php"; 
    include "connect.php";
    include "modal.php" ?>
  <div class="container">

    <p><b><center><h3>Select Particular Candidate</h3></center></b></p>
  </div><br><br>
  
  <div class="middle container">
    <form class="form-inline">
      <div class="row">
        <div class="col-sm-4">
          <label>Select Parties</label>
          <select name="party" id="party" class="form-control" style="width: 100%" >
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
          <select id="state" class="form-control" style="width: 100%" onChange="getCity(this.value);" >
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
          <select id="state_list" class="form-control city" style="width: 100%">
            <option value="select" hidden>Select</option>
           
          </select>
        </div>
      </div><br>
        
    </form>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <button class="form-control btn btn-primary" id="load-button"  onclick="data()">&nbsp;Search</button>
        </div>
          <div class="col-sm-4">  
          </div>
        </div>
  </div><br>
  

<div class="container">  
  <h4><b>Choose Area</b></h4>  <br>
  
<table class="table  table-bordered text-center" style="border-color: black" >  
    <thead>
      
    </thead>
    <tbody id="response">
      
    </tbody>
</table>  
  
</div>  
 
  
  <script type="text/javascript">
   function data(){
     var state = document.getElementById('state').value;
     var city = document.getElementById('state_list').value;
     var party = document.getElementById('party').value;
       
      $.ajax({
        url:"candidate_search.php",
        type:"POST",

        //data:{state:'state',city:'state_list'},
        data:{state:state,city:city,party:party},
        success:function(response){
          $("#response").html(response);
        }

      });
    
    }
  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  </body>  
</html>  
