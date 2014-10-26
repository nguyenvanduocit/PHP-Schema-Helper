<?php
class SchTypeAndQuantityNode extends SchStructuredValue{
	protected $amountOfThisGood	=	'Number';
	protected $businessFunction	=	'BusinessFunction';
	protected $typeOfGood	=	'Product';
	protected $unitCode	=	'Text';
	function __construct(){$this->namespace = "TypeAndQuantityNode";}
}