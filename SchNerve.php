<?php
class SchNerve extends SchAnatomicalStructure{
	protected $branch	=	'Nerve,AnatomicalStructure';
	protected $nerveMotor	=	'Muscle';
	protected $sensoryUnit	=	'SuperficialAnatomy,AnatomicalStructure';
	protected $sourcedFrom	=	'BrainStructure';
	function __construct(){$this->namespace = "Nerve";}
}