<?php
class SchAnatomicalStructure extends SchMedicalEntity{
	protected $associatedPathophysiology	=	'Text';
	protected $bodyLocation	=	'Text';
	protected $connectedTo	=	'AnatomicalStructure';
	protected $diagram	=	'ImageObject';
	protected $function	=	'Text';
	protected $partOfSystem	=	'AnatomicalSystem';
	protected $relatedCondition	=	'MedicalCondition';
	protected $relatedTherapy	=	'MedicalTherapy';
	protected $subStructure	=	'AnatomicalStructure';
	function __construct(){$this->namespace = "AnatomicalStructure";}
}