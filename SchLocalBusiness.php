<?php
class SchLocalBusiness extends SchPlace{
	protected $branchOf	=	'Organization';
	protected $currenciesAccepted	=	'Text';
	protected $openingHours	=	'Duration';
	protected $paymentAccepted	=	'Text';
	protected $priceRange	=	'Text';
	function __construct(){$this->namespace = "LocalBusiness";}
}