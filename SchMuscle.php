<?php
class SchMuscle extends SchAnatomicalStructure{
	protected $antagonist	=	'Muscle';
	protected $bloodSupply	=	'Vessel';
	protected $insertion	=	'AnatomicalStructure';
	protected $muscleAction	=	'Text';
	protected $nerve	=	'Nerve';
	protected $origin	=	'AnatomicalStructure';
	function __construct(){$this->namespace = "Muscle";}
}