<?php

class SchWebPage extends SchCreativeWork
{
    protected $breadcrumb = 'Text';
    protected $lastReviewed = 'Date';
    protected $mainContentOfPage = 'WebPageElement';
    protected $primaryImageOfPage = 'ImageObject';
    protected $relatedLink = 'URL';
    protected $reviewedBy = 'Person,Organization';
    protected $significantLink = 'URL';
    protected $specialty = 'Specialty';

    function __construct()
    {
        $this->namespace = "WebPage";
    }
}