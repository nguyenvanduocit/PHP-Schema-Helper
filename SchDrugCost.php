<?php
class SchDrugCost extends SchMedicalIntangible{
	protected $applicableLocation	=	'AdministrativeArea';
	protected $costCategory	=	'DrugCostCategory';
	protected $costCurrency	=	'Text';
	protected $costOrigin	=	'Text';
	protected $costPerUnit	=	'Number,Text';
	protected $drugUnit	=	'Text';
	function __construct(){$this->namespace = "DrugCost";}
}