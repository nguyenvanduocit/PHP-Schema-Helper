<?php
class SchService extends SchIntangible{
	protected $availableChannel	=	'ServiceChannel';
	protected $produces	=	'Thing';
	protected $provider	=	'Person,Organization';
	protected $serviceArea	=	'AdministrativeArea';
	protected $serviceAudience	=	'Audience';
	protected $serviceType	=	'Text';
	function __construct(){$this->namespace = "Service";}
}