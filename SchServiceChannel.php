<?php
class SchServiceChannel extends SchIntangible{
	protected $availableLanguage	=	'Language';
	protected $processingTime	=	'Duration';
	protected $providesService	=	'Service';
	protected $serviceLocation	=	'Place';
	protected $servicePhone	=	'ContactPoint';
	protected $servicePostalAddress	=	'PostalAddress';
	protected $serviceSmsNumber	=	'ContactPoint';
	protected $serviceUrl	=	'URL';
	function __construct(){$this->namespace = "ServiceChannel";}
}