<?php
class SchMedicalTrial extends SchMedicalStudy{
	protected $phase	=	'Text';
	protected $trialDesign	=	'MedicalTrialDesign';
	function __construct(){$this->namespace = "MedicalTrial";}
}