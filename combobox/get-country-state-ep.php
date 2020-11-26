<?php
namespace Phppot;

use Phppot\StateCity;
if (! empty($_POST["state_id"])) {
    
    $stateId = $_POST["state_id"];
    
    require_once __DIR__ . '/CountryState.php';
    $countryState = new StateCity();
    $stateResult = $countryState->getCityesByStateId($stateId);
    ?>
<option value="">Select Cityes</option>
<?php
    foreach ($stateResult as $city) {
        ?>
<option value="<?php echo $city["id"]; ?>"><?php echo $city["city_name"]; ?></option>
<?php
    }
}
?>