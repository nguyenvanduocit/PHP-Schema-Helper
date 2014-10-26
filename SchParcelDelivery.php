<?php
class SchParcelDelivery extends SchIntangible{
	protected $deliveryAddress	=	'PostalAddress';
	protected $deliveryStatus	=	'DeliveryEvent';
	protected $expectedArrivalFrom	=	'DateTime';
	protected $expectedArrivalUntil	=	'DateTime';
	protected $hasDeliveryMethod	=	'DeliveryMethod';
	protected $itemShipped	=	'Product';
	protected $originAddress	=	'PostalAddress';
	protected $partOfOrder	=	'Order';
	protected $provider	=	'Person,Organization';
	protected $trackingNumber	=	'Text';
	protected $trackingUrl	=	'URL';
	function __construct(){$this->namespace = "ParcelDelivery";}
}