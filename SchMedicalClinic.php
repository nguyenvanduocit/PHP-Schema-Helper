<?php
class SchMedicalClinic extends SchMedicalOrganization{
	protected $availableService	=	'MedicalTest,MedicalTherapy,MedicalProcedure';
	protected $medicalSpecialty	=	'MedicalSpecialty';
	function __construct(){$this->namespace = "MedicalClinic";}
}