<?php
class SchGiveAction extends SchTransferAction{
	protected $recipient	=	'Organization,Audience,Person';
	function __construct(){$this->namespace = "GiveAction";}
}