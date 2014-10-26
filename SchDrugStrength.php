<?php
class SchDrugStrength extends SchMedicalIntangible{
	protected $activeIngredient	=	'Text';
	protected $availableIn	=	'AdministrativeArea';
	protected $strengthUnit	=	'Text';
	protected $strengthValue	=	'Number';
	function __construct(){$this->namespace = "DrugStrength";}
}