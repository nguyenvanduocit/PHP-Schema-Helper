<?php
class SchMedicalConditionStage extends SchMedicalIntangible{
	protected $stageAsNumber	=	'Number';
	protected $subStageSuffix	=	'Text';
	function __construct(){$this->namespace = "MedicalConditionStage";}
}