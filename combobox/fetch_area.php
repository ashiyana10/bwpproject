<?php
$id = ($_REQUEST["id"] <> "") ? trim($_REQUEST["id"]) : "";
if ($id <> "") {
    $sql = "SELECT * FROM area WHERE id = :aid ORDER BY area_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":aid", trim($id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        
        ?>
        <label>area: 
            <select name="area" name="box">
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["area_name"]; ?></option>
                <?php } ?>
            </select>
        </label>
        <?php
    }
}
?>