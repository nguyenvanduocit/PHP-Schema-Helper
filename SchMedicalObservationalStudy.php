<?php
class SchMedicalObservationalStudy extends SchMedicalStudy{
	protected $studyDesign	=	'MedicalObservationalStudyDesign';
	function __construct(){$this->namespace = "MedicalObservationalStudy";}
}