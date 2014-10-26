<?php
class SchPhysician extends SchMedicalOrganization{
	protected $availableService	=	'MedicalTest,MedicalTherapy,MedicalProcedure';
	protected $hospitalAffiliation	=	'Hospital';
	protected $medicalSpecialty	=	'MedicalSpecialty';
	function __construct(){$this->namespace = "Physician";}
}