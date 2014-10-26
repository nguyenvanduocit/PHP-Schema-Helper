<?php
class SchBroadcastService extends SchThing{
	protected $area	=	'Place';
	protected $broadcaster	=	'Organization';
	protected $parentService	=	'BroadcastService';
	function __construct(){$this->namespace = "BroadcastService";}
}