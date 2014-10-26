<?php
class SchJoint extends SchAnatomicalStructure{
	protected $biomechnicalClass	=	'Text';
	protected $functionalClass	=	'Text';
	protected $structuralClass	=	'Text';
	function __construct(){$this->namespace = "Joint";}
}