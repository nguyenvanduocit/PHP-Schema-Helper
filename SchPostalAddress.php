<?php
class SchPostalAddress extends SchContactPoint{
	protected $addressCountry	=	'Country';
	protected $addressLocality	=	'Text';
	protected $addressRegion	=	'Text';
	protected $postOfficeBoxNumber	=	'Text';
	protected $postalCode	=	'Text';
	protected $streetAddress	=	'Text';
	function __construct(){$this->namespace = "PostalAddress";}
}