<?php
class SchAllocateAction extends SchOrganizeAction{
	protected $purpose	=	'Thing,MedicalDevicePurpose';
	function __construct(){$this->namespace = "AllocateAction";}
}