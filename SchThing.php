<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:20 AM
 */
class SchThing extends SchBase
{
    protected $properties = array(
        "additionalType" => "additionalType",
        "alternateName" => "alternateName",
        "description" => "description",
        "image" => "image",
        "name" => "name",
        "potentialAction" => "potentialAction",
        "sameAs" => "sameAs",
        "url" => "url"
    );

    function __construct($args = array())
    {
        $this->namespace = 'Thing';
    }
}