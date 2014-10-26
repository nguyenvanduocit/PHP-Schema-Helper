<?php
class SchCookAction extends SchCreateAction{
	protected $foodEstablishment	=	'FoodEstablishment,Place';
	protected $foodEvent	=	'FoodEvent';
	protected $recipe	=	'Recipe';
	function __construct(){$this->namespace = "CookAction";}
}