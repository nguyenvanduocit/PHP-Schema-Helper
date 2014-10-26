<?php
class SchQualitativeValue extends SchEnumeration{
	protected $equal	=	'QualitativeValue';
	protected $greater	=	'QualitativeValue';
	protected $greaterOrEqual	=	'QualitativeValue';
	protected $lesser	=	'QualitativeValue';
	protected $lesserOrEqual	=	'QualitativeValue';
	protected $nonEqual	=	'QualitativeValue';
	protected $valueReference	=	'StructuredValue,Enumeration';
	function __construct(){$this->namespace = "QualitativeValue";}
}