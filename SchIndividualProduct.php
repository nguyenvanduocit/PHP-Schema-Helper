<?php
class SchIndividualProduct extends SchProduct{
	protected $serialNumber	=	'Text';
	function __construct(){$this->namespace = "IndividualProduct";}
}