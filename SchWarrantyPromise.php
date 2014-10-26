<?php
class SchWarrantyPromise extends SchStructuredValue{
	protected $durationOfWarranty	=	'QuantitativeValue';
	protected $warrantyScope	=	'WarrantyScope';
	function __construct(){$this->namespace = "WarrantyPromise";}
}