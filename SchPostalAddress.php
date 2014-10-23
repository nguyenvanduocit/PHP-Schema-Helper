<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:36 PM
 */
class SchPostalAddress extends SchContactPoint
{

    protected $properties = array(
        "addressCountry" => "addressCountry",
        "addressLocality" => "addressLocality",
        "addressRegion" => "addressRegion",
        "postOfficeBoxNumber" => "postOfficeBoxNumber",
        "postalCode" => "postalCode",
        "streetAddress" => "streetAddress"
    );

    function __construct()
    {
        $this->namespace = 'PostalAddress';
    }
}