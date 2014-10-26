<?php
class SchDrugLegalStatus extends SchMedicalIntangible{
	protected $applicableLocation	=	'AdministrativeArea';
	function __construct(){$this->namespace = "DrugLegalStatus";}
}