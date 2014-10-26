<?php
class SchContactPoint extends SchStructuredValue{
	protected $areaServed	=	'AdministrativeArea';
	protected $availableLanguage	=	'Language';
	protected $contactOption	=	'ContactPointOption';
	protected $contactType	=	'Text';
	protected $email	=	'Text';
	protected $faxNumber	=	'Text';
	protected $hoursAvailable	=	'OpeningHoursSpecification';
	protected $productSupported	=	'Product,Text';
	protected $telephone	=	'Text';
	function __construct(){$this->namespace = "ContactPoint";}
}