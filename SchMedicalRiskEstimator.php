<?php
class SchMedicalRiskEstimator extends SchMedicalEntity{
	protected $estimatesRiskOf	=	'MedicalEntity';
	protected $includedRiskFactor	=	'MedicalRiskFactor';
	function __construct(){$this->namespace = "MedicalRiskEstimator";}
}