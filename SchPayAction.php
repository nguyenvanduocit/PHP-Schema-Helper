<?php
class SchPayAction extends SchTradeAction{
	protected $purpose	=	'MedicalDevicePurpose,Thing';
	protected $recipient	=	'Person,Organization,Audience';
	function __construct(){$this->namespace = "PayAction";}
}