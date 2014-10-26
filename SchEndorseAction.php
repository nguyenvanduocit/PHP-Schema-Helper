<?php
class SchEndorseAction extends SchReactAction{
	protected $endorsee	=	'Organization,Person';
	function __construct(){$this->namespace = "EndorseAction";}
}