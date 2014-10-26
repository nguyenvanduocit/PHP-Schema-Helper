<?php
class SchProperty extends SchIntangible{
	protected $domainIncludes	=	'Class';
	protected $inverseOf	=	'Property';
	protected $rangeIncludes	=	'Class';
	protected $supersededBy	=	'Property';
	function __construct(){$this->namespace = "Property";}
}