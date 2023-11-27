<?php
$filepath = realpath(dirname(__FILE__));
include($filepath.'/../lib/database.php');
include($filepath.'/../helpers/format.php'); 
?>


<?php 
class essay{
    private $db;
    private $fm;
    
    // function constructor
    public function __construct() 
    {
        $this->db = new Database();
        $this->fm = new Format();
    } 
    
    // function show essay
    public function essay(){
        $query = "SELECT * FROM essay ";
        $result = $this->db->select($query);
        return $result;
    }
}

?>