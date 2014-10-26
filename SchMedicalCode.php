<?php
class SchMedicalCode extends SchMedicalIntangible{
	protected $codeValue	=	'Text';
	protected $codingSystem	=	'Text';
	function __construct(){$this->namespace = "MedicalCode";}
}