<?php
class SchNutritionInformation extends SchStructuredValue{
	protected $calories	=	'Energy';
	protected $carbohydrateContent	=	'Mass';
	protected $cholesterolContent	=	'Mass';
	protected $fatContent	=	'Mass';
	protected $fiberContent	=	'Mass';
	protected $proteinContent	=	'Mass';
	protected $saturatedFatContent	=	'Mass';
	protected $servingSize	=	'Text';
	protected $sodiumContent	=	'Mass';
	protected $sugarContent	=	'Mass';
	protected $transFatContent	=	'Mass';
	protected $unsaturatedFatContent	=	'Mass';
	function __construct(){$this->namespace = "NutritionInformation";}
}