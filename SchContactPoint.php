<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:27 PM
 */
class SchContactPoint extends SchThing
{
    protected $properties = array(
        "areaServed" => "areaServed",
        "availableLanguage" => "availableLanguage",
        "contactOption" => "contactOption",
        "contactType" => "contactType",
        "email" => "email",
        "faxNumber" => "faxNumber",
        "hoursAvailable" => "hoursAvailable",
        "productSupported" => "productSupported",
        "telephone" => "telephone"
    );

    function __construct()
    {
        $this->namespace = 'ContactPoint';
    }

}