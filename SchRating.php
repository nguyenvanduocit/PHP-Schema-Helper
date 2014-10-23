<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:46 AM
 */
class SchRating extends SchThing
{
    protected $properties = array(
        'bestRating' => 'bestRating',
        'ratingValue' => 'ratingValue',
        'worstRating' => 'worstRating'
    );

    function __construct()
    {
        $this->namespace = 'Rating';

    }
}