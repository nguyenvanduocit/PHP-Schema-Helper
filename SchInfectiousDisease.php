<?php
class SchInfectiousDisease extends SchMedicalCondition{
	protected $infectiousAgent	=	'Text';
	protected $infectiousAgentClass	=	'InfectiousAgentClass';
	protected $transmissionMethod	=	'Text';
	function __construct(){$this->namespace = "InfectiousDisease";}
}