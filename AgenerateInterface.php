<?php
$files = scandir(__DIR__);
foreach($files as $file){
    $basename = str_replace("Sch", '',basename($file, ".php"));
    if( $basename == "ema" || $basename == "aExample" || $basename == "autoload" || $basename == "." || $basename == ".." || $basename == ".git" || $basename == ".idea"|| $basename == "AgenerateInterface" || $basename == "ClassGenerator" || $basename == "README.md" )
    {
        continue;
    }
    echo 'public static function ' . $basename . '($prop = null, $val = null)
    {
        return self::fillter("Sch' . $basename . '", $prop, $val);
    }<br>';
}