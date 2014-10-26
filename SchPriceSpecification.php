<?php
class SchPriceSpecification extends SchStructuredValue{
	protected $eligibleQuantity	=	'QuantitativeValue';
	protected $eligibleTransactionVolume	=	'PriceSpecification';
	protected $maxPrice	=	'Number';
	protected $minPrice	=	'Number';
	protected $price	=	'Text,Number';
	protected $priceCurrency	=	'Text';
	protected $validFrom	=	'DateTime';
	protected $validThrough	=	'DateTime';
	protected $valueAddedTaxIncluded	=	'Boolean';
	function __construct(){$this->namespace = "PriceSpecification";}
}