<?php
class SchPhysicalActivity extends SchLifestyleModification{
	protected $associatedAnatomy	=	'AnatomicalSystem,AnatomicalStructure,SuperficialAnatomy';
	protected $category	=	'PhysicalActivityCategory,Text,Thing';
	protected $epidemiology	=	'Text';
	protected $pathophysiology	=	'Text';
	function __construct(){$this->namespace = "PhysicalActivity";}
}