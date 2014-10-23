<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:52 AM
 */
class SchProduct extends SchThing
{
    protected $properties = array(
        "aggregateRating" => "aggregateRating",
        "audience" => "audience",
        "brand" => "brand",
        "color" => "color",
        "depth" => "depth",
        "gtin13" => "gtin13",
        "gtin14" => "gtin14",
        "gtin8" => "gtin8",
        "height" => "height",
        "isAccessoryOrSparePartFor" => "isAccessoryOrSparePartFor",
        "isConsumableFor" => "isConsumableFor",
        "isRelatedTo" => "isRelatedTo",
        "isSimilarTo" => "isSimilarTo",
        "itemCondition" => "itemCondition",
        "logo" => "logo",
        "manufacturer" => "manufacturer",
        "model" => "model",
        "mpn" => "mpn",
        "offers" => "offers",
        "productID" => "productID",
        "releaseDate" => "releaseDate",
        "review" => "review",
        "sku" => "sku",
        "weight" => "weight",
        "width" => "width"
    );

    function __construct()
    {
        $this->namespace = 'Product';
    }
}