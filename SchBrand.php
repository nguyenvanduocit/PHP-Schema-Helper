<?php

/**
 * Project : phpschema
 * User: thuytien
 * Date: 10/23/2014
 * Time: 4:15 PM
 */
class SchBrand extends SchThing
{
    protected $properties = array('logo' => 'logo');

    function __construct()
    {
        $this->namespace = 'Brand';
    }
}