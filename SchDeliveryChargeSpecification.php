<?php
class SchDeliveryChargeSpecification extends SchPriceSpecification{
	protected $appliesToDeliveryMethod	=	'DeliveryMethod';
	protected $eligibleRegion	=	'GeoShape,Text';
	function __construct(){$this->namespace = "DeliveryChargeSpecification";}
}