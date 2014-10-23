<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:07 PM
 */
class SchOrganization extends SchThing
{
    protected $properties = array(
        "address" => "address",
        "aggregateRating" => "aggregateRating",
        "brand" => "brand",
        "contactPoint" => "contactPoint",
        "department" => "department",
        "dissolutionDate" => "dissolutionDate",
        "duns" => "duns",
        "email" => "email",
        "employee" => "employee",
        "event" => "event",
        "faxNumber" => "faxNumber",
        "founder" => "founder",
        "foundingDate" => "foundingDate",
        "globalLocationNumber" => "globalLocationNumber",
        "hasPOS" => "hasPOS",
        "interactionCount" => "interactionCount",
        "isicV4" => "isicV4",
        "legalName" => "legalName",
        "location" => "location",
        "logo" => "logo",
        "makesOffer" => "makesOffer",
        "member" => "member",
        "memberOf" => "memberOf",
        "naics" => "naics",
        "owns" => "owns",
        "review" => "review",
        "taxID" => "taxID",
        "telephone" => "telephone",
        "vatID" => "vatID",
    );

    function __construct()
    {
        $this->namespace = 'Organization';

    }
}