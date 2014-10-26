<?php
class SchBuyAction extends SchTradeAction{
	protected $seller	=	'Person,Organization';
	protected $warrantyPromise	=	'WarrantyPromise';
	function __construct(){$this->namespace = "BuyAction";}
}