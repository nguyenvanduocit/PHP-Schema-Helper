<?php
class SchUnitPriceSpecification extends SchPriceSpecification{
	protected $billingIncrement	=	'Number';
	protected $priceType	=	'Text';
	protected $unitCode	=	'Text';
	function __construct(){$this->namespace = "UnitPriceSpecification";}
}