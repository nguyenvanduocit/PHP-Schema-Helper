<?php
class SchQuantitativeValue extends SchStructuredValue{
	protected $maxValue	=	'Number';
	protected $minValue	=	'Number';
	protected $unitCode	=	'Text';
	protected $value	=	'Number';
	protected $valueReference	=	'Enumeration,StructuredValue';
	function __construct(){$this->namespace = "QuantitativeValue";}
}