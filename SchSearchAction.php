<?php
class SchSearchAction extends SchAction{
	protected $query	=	'Text,Class';
	function __construct(){$this->namespace = "SearchAction";}
}