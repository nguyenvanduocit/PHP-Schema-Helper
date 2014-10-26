<?php
class SchFoodEstablishmentReservation extends SchReservation{
	protected $endTime	=	'DateTime';
	protected $partySize	=	'Number,QuantitativeValue';
	protected $startTime	=	'DateTime';
	function __construct(){$this->namespace = "FoodEstablishmentReservation";}
}