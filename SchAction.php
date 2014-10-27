<?php
class SchAction extends SchThing{
	protected $actionStatus	=	'ActionStatusType';
	protected $agent	=	'Organization,Person';
	protected $endTime	=	'DateTime';
	protected $instrument	=	'Thing';
	protected $location	=	'PostalAddress,Place';
	protected $object	=	'Thing';
	protected $participant	=	'Organization,Person';
	protected $result	=	'Thing';
	protected $startTime	=	'DateTime';
	protected $target	=	'EntryPoint';
	function __construct(){$this->namespace = "Action";}
}