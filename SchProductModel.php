<?php
class SchProductModel extends SchProduct{
	protected $isVariantOf	=	'ProductModel';
	protected $predecessorOf	=	'ProductModel';
	protected $successorOf	=	'ProductModel';
	function __construct(){$this->namespace = "ProductModel";}
}