<?php
namespace Phppot;

use Phppot\DataSource;

class StateCity
{
    private $ds;
    
    function __construct()
    {
        require_once __DIR__ . '/DataSource.php';
        $this->ds = new DataSource();
    }
    
    /**
     * to get the country record set
          * @return array result record
     */
    public function getAllState()
    {
        $query = "SELECT * FROM states";
        $result = $this->ds->select($query);
        return $result;
    }
    
    /**
     * to get the state record based on the country_id
     *
     * @param string $countryId
     * @return array result record
     */
    public function getCityesByStateId($countryId)
    {
        $query = "SELECT * FROM cityes WHERE state_id = ?";
        $paramType = 'd';
        $paramArray = array(
            $countryId
        );
        $result = $this->ds->select($query, $paramType, $paramArray);
        return $result;
    }
   
}