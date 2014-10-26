<?php
class SchMedicalGuidelineRecommendation extends SchMedicalGuideline{
	protected $recommendationStrength	=	'Text';
	function __construct(){$this->namespace = "MedicalGuidelineRecommendation";}
}