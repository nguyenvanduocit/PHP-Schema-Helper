<?php
class SchMedicalGuideline extends SchMedicalEntity{
	protected $evidenceLevel	=	'MedicalEvidenceLevel';
	protected $evidenceOrigin	=	'Text';
	protected $guidelineDate	=	'Date';
	protected $guidelineSubject	=	'MedicalEntity';
	function __construct(){$this->namespace = "MedicalGuideline";}
}