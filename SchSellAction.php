<?php
class SchSellAction extends SchTradeAction{
	protected $buyer	=	'Person';
	protected $warrantyPromise	=	'WarrantyPromise';
	function __construct(){$this->namespace = "SellAction";}
}