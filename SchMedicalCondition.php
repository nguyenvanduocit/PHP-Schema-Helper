<?php
class SchMedicalCondition extends SchMedicalEntity{
	protected $associatedAnatomy	=	'SuperficialAnatomy,AnatomicalSystem,AnatomicalStructure';
	protected $cause	=	'MedicalCause';
	protected $differentialDiagnosis	=	'DDxElement';
	protected $epidemiology	=	'Text';
	protected $expectedPrognosis	=	'Text';
	protected $naturalProgression	=	'Text';
	protected $pathophysiology	=	'Text';
	protected $possibleComplication	=	'Text';
	protected $possibleTreatment	=	'MedicalTherapy';
	protected $primaryPrevention	=	'MedicalTherapy';
	protected $riskFactor	=	'MedicalRiskFactor';
	protected $secondaryPrevention	=	'MedicalTherapy';
	protected $signOrSymptom	=	'MedicalSignOrSymptom';
	protected $stage	=	'MedicalConditionStage';
	protected $subtype	=	'Text';
	protected $typicalTest	=	'MedicalTest';
	function __construct(){$this->namespace = "MedicalCondition";}
}