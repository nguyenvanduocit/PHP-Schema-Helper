<?php
class SchTaxiReservation extends SchReservation{
	protected $partySize	=	'Number,QuantitativeValue';
	protected $pickupLocation	=	'Place';
	protected $pickupTime	=	'DateTime';
	function __construct(){$this->namespace = "TaxiReservation";}
}