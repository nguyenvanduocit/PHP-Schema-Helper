<?php
$_GLOBAL['SCHEMA_CLASS'] = array(
    'SchBaseInterface.php',
    'SchBase.php',
    'SchThing.php',
    'SchAction.php',
    'SchAdministrativeArea.php',
    'SchRating.php',
    'SchAggregateRating.php',
    'SchAudience.php',
    'SchContactPoint.php',
    'SchContactPointOption.php',
    'SchOfferItemCondition.php',
    'SchOrganization.php',
    'SchPlace.php',
    'SchPostalAddress.php',
    'SchBrand.php',
    'SchProduct.php',
    'Schema.php'
);
$classToLoad = $_GLOBAL['SCHEMA_CLASS'];
foreach($classToLoad as $class){
    require_once $class;
}