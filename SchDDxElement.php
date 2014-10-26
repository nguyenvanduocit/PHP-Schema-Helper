<?php
class SchDDxElement extends SchMedicalIntangible{
	protected $diagnosis	=	'MedicalCondition';
	protected $distinguishingSign	=	'MedicalSignOrSymptom';
	function __construct(){$this->namespace = "DDxElement";}
}