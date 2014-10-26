<?php
class SchSendAction extends SchTransferAction{
	protected $deliveryMethod	=	'DeliveryMethod';
	protected $recipient	=	'Organization,Audience,Person';
	function __construct(){$this->namespace = "SendAction";}
}