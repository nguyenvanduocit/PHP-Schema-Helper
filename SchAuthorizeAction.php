<?php
class SchAuthorizeAction extends SchAllocateAction{
	protected $recipient	=	'Organization,Audience,Person';
	function __construct(){$this->namespace = "AuthorizeAction";}
}