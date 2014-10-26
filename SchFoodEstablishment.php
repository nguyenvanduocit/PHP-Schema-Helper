<?php
class SchFoodEstablishment extends SchLocalBusiness{
	protected $acceptsReservations	=	'Boolean,Text,URL';
	protected $menu	=	'Text,URL';
	protected $servesCuisine	=	'Text';
	function __construct(){$this->namespace = "FoodEstablishment";}
}