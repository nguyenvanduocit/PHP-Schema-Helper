<?php
class SchDoseSchedule extends SchMedicalIntangible{
	protected $doseUnit	=	'Text';
	protected $doseValue	=	'Number';
	protected $frequency	=	'Text';
	protected $targetPopulation	=	'Text';
	function __construct(){$this->namespace = "DoseSchedule";}
}