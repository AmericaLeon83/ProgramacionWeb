<?php
session_start();
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'optica');
define('DB_USER', 'optica');
define('DB_PASSWORD', '123');
class Config
{
    function getImageSize(){
        return 1024000;
    }
    function getImageType() {
        return array('image/png', 'image/jpeg');
    }
}
