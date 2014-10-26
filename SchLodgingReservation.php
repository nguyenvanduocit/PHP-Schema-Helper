<?php
class SchLodgingReservation extends SchReservation{
	protected $checkinTime	=	'DateTime';
	protected $checkoutTime	=	'DateTime';
	protected $lodgingUnitDescription	=	'Text';
	protected $lodgingUnitType	=	'Text,QualitativeValue';
	protected $numAdults	=	'Number,QuantitativeValue';
	protected $numChildren	=	'Number,QuantitativeValue';
	function __construct(){$this->namespace = "LodgingReservation";}
}