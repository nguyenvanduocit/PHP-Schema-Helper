<?php
class SchMedicalTherapy extends SchMedicalEntity{
	protected $adverseOutcome	=	'MedicalEntity';
	protected $contraindication	=	'MedicalContraindication';
	protected $duplicateTherapy	=	'MedicalTherapy';
	protected $indication	=	'MedicalIndication';
	protected $seriousAdverseOutcome	=	'MedicalEntity';
	function __construct(){$this->namespace = "MedicalTherapy";}
}