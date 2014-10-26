<?php
class SchReplaceAction extends SchUpdateAction{
	protected $replacee	=	'Thing';
	protected $replacer	=	'Thing';
	function __construct(){$this->namespace = "ReplaceAction";}
}