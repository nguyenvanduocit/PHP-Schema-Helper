<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:54 AM
 */
class SchAudience extends SchThing
{
    protected $properties = array(
        "audienceType"=>"audienceType",
        "geographicArea"=>"geographicArea",
    );
    function __construct()
    {
        $this->namespace = 'Audience';

    }
}