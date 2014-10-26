<?php
class SchMedicalEntity extends SchThing{
	protected $alternateName	=	'Text';
	protected $code	=	'MedicalCode';
	protected $guideline	=	'MedicalGuideline';
	protected $medicineSystem	=	'MedicineSystem';
	protected $recognizingAuthority	=	'Organization';
	protected $relevantSpecialty	=	'MedicalSpecialty';
	protected $study	=	'MedicalStudy';
	function __construct(){$this->namespace = "MedicalEntity";}
}