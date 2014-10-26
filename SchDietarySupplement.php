<?php
class SchDietarySupplement extends SchMedicalTherapy{
	protected $activeIngredient	=	'Text';
	protected $background	=	'Text';
	protected $dosageForm	=	'Text';
	protected $isProprietary	=	'Boolean';
	protected $legalStatus	=	'DrugLegalStatus';
	protected $manufacturer	=	'Organization';
	protected $maximumIntake	=	'MaximumDoseSchedule';
	protected $mechanismOfAction	=	'Text';
	protected $nonProprietaryName	=	'Text';
	protected $recommendedIntake	=	'RecommendedDoseSchedule';
	protected $safetyConsideration	=	'Text';
	protected $targetPopulation	=	'Text';
	function __construct(){$this->namespace = "DietarySupplement";}
}