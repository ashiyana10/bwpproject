<?php
namespace Phppot;

use Phppot\StateCity;

if (!(empty($_POST["city_id"]))) {
	
	$cityId=$_POST["city_id"];
	
	
	require_once __DIR__ . '/CountryState.php';
	$cityArea = new StateCity();
	$cityResult = $cityArea->getAreaByCityId($cityId);
    ?>
    <option value="" hidden="true">Select</option>
<?php

    foreach ($cityResult as $area) {
        ?>
<option value="<?php echo $area["id"]; ?>"><?php echo $area["area_name"]; ?></option>
<?php
}
}
?>