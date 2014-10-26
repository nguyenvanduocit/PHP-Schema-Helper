<?php
class SchMedicalProcedure extends SchMedicalEntity{
	protected $followup	=	'Text';
	protected $howPerformed	=	'Text';
	protected $preparation	=	'Text';
	protected $procedureType	=	'MedicalProcedureType';
	function __construct(){$this->namespace = "MedicalProcedure";}
}