<?php
class SchSomeProducts extends SchProduct{
	protected $inventoryLevel	=	'QuantitativeValue';
	function __construct(){$this->namespace = "SomeProducts";}
}