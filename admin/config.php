<?php
session_start();
define("DB_DRIVER","mysql");
define("DB_HOST","localhost");
define("DB_NAME","optica");
define("DB_USER","optica");
define("DB_PASSWORD","123");
define("DB_PORT","3306");
class config {
    function getImageSize() {
        return 512000;}
    function getImageType(){
        return array('image/png','image/jpeg','image/x-pgn');   
    }
}
?>
