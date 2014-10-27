<?php
function __autoload($class_name) {
    if( ($class_name == "SchText") || ($class_name == "SchNumber") || ($class_name == "SchURL") || ( strrpos($class_name, "Sch") === false ) )
    {
        return;
    }
    require_once ( $class_name . '.php');
}
require_once "Schema.php";