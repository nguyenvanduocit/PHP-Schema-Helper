<?php
class SchLymphaticVessel extends SchVessel{
	protected $originatesFrom	=	'Vessel';
	protected $regionDrained	=	'AnatomicalSystem,AnatomicalStructure';
	protected $runsTo	=	'Vessel';
	function __construct(){$this->namespace = "LymphaticVessel";}
}