<?php
class SchDiet extends SchLifestyleModification{
	protected $dietFeatures	=	'Text';
	protected $endorsers	=	'Organization,Person';
	protected $expertConsiderations	=	'Text';
	protected $overview	=	'Text';
	protected $physiologicalBenefits	=	'Text';
	protected $proprietaryName	=	'Text';
	protected $risks	=	'Text';
	function __construct(){$this->namespace = "Diet";}
}