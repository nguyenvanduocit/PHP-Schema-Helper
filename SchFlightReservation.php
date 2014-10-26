<?php
class SchFlightReservation extends SchReservation{
	protected $boardingGroup	=	'Text';
	function __construct(){$this->namespace = "FlightReservation";}
}