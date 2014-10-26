<?php
class SchPermit extends SchIntangible{
	protected $issuedBy	=	'Organization';
	protected $issuedThrough	=	'Service';
	protected $permitAudience	=	'Audience';
	protected $validFor	=	'Duration';
	protected $validFrom	=	'DateTime';
	protected $validIn	=	'AdministrativeArea';
	protected $validUntil	=	'Date';
	function __construct(){$this->namespace = "Permit";}
}