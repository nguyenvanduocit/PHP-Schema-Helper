<?php
class SchMedicalSignOrSymptom extends SchMedicalEntity{
	protected $cause	=	'MedicalCause';
	protected $possibleTreatment	=	'MedicalTherapy';
	function __construct(){$this->namespace = "MedicalSignOrSymptom";}
}