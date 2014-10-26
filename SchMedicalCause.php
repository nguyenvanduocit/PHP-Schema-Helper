<?php
class SchMedicalCause extends SchMedicalEntity{
	protected $causeOf	=	'MedicalEntity';
	function __construct(){$this->namespace = "MedicalCause";}
}