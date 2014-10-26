<?php
class SchMedicalDevice extends SchMedicalEntity{
	protected $adverseOutcome	=	'MedicalEntity';
	protected $contraindication	=	'MedicalContraindication';
	protected $indication	=	'MedicalIndication';
	protected $postOp	=	'Text';
	protected $preOp	=	'Text';
	protected $procedure	=	'Text';
	protected $purpose	=	'MedicalDevicePurpose,Thing';
	protected $seriousAdverseOutcome	=	'MedicalEntity';
	function __construct(){$this->namespace = "MedicalDevice";}
}