<?php
class SchRentAction extends SchTradeAction{
	protected $landlord	=	'Organization,Person';
	protected $realEstateAgent	=	'RealEstateAgent';
	function __construct(){$this->namespace = "RentAction";}
}