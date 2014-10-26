<?php
class SchAnatomicalSystem extends SchMedicalEntity{
	protected $associatedPathophysiology	=	'Text';
	protected $comprisedOf	=	'AnatomicalSystem,AnatomicalStructure';
	protected $relatedCondition	=	'MedicalCondition';
	protected $relatedStructure	=	'AnatomicalStructure';
	protected $relatedTherapy	=	'MedicalTherapy';
	function __construct(){$this->namespace = "AnatomicalSystem";}
}