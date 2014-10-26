<?php
class SchDeliveryEvent extends SchEvent{
	protected $accessCode	=	'Text';
	protected $availableFrom	=	'DateTime';
	protected $availableThrough	=	'DateTime';
	protected $hasDeliveryMethod	=	'DeliveryMethod';
	function __construct(){$this->namespace = "DeliveryEvent";}
}