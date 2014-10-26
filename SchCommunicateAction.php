<?php
class SchCommunicateAction extends SchInteractAction{
	protected $about	=	'Thing';
	protected $language	=	'Language';
	protected $recipient	=	'Person,';
	function __construct(){$this->namespace = "CommunicateAction";}
}