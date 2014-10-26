<?php
class SchMedicalStudy extends SchMedicalEntity{
	protected $outcome	=	'Text';
	protected $population	=	'Text';
	protected $sponsor	=	'Organization';
	protected $status	=	'MedicalStudyStatus';
	protected $studyLocation	=	'AdministrativeArea';
	protected $studySubject	=	'MedicalEntity';
	function __construct(){$this->namespace = "MedicalStudy";}
}