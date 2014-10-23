<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:52 AM
 */
class SchAggregateRating extends SchRating
{
    protected $properties = array(
        "itemReviewed" => "itemReviewed",
        "ratingCount" => "ratingCount",
        "reviewCount" => "reviewCount",
        "bestRating" => "bestRating",
        "ratingValue" => "ratingValue",
        "worstRating" => "worstRating"
    );

    function __construct()
    {
        $this->name = 'AggregateRating';

    }
}