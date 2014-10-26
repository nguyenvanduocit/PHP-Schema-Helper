<?php
class SchDiagnosticLab extends SchMedicalOrganization{
	protected $availableTest	=	'MedicalTest';
	function __construct(){$this->namespace = "DiagnosticLab";}
}