<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:43 PM
 */
class SchPlace extends SchThing
{
    protected $properties = array(
        "address" => "address",
        "aggregateRating" => "aggregateRating",
        "containedIn" => "containedIn",
        "event" => "event",
        "faxNumber" => "faxNumber",
        "geo" => "geo",
        "globalLocationNumber" => "globalLocationNumber",
        "hasMap" => "hasMap",
        "interactionCount" => "interactionCount",
        "isicV4" => "isicV4",
        "logo" => "logo",
        "openingHoursSpecification" => "openingHoursSpecification",
        "photo" => "photo",
        "review" => "review",
        "telephone" => "telephone"
    );

    function __construct()
    {
        $this->namespace = 'Place';

    }
}