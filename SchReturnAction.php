<?php
class SchReturnAction extends SchTransferAction{
	protected $recipient	=	'Person,Organization,Audience';
	function __construct(){$this->namespace = "ReturnAction";}
}