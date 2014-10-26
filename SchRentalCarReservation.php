<?php
class SchRentalCarReservation extends SchReservation{
	protected $dropoffLocation	=	'Place';
	protected $dropoffTime	=	'DateTime';
	protected $pickupLocation	=	'Place';
	protected $pickupTime	=	'DateTime';
	function __construct(){$this->namespace = "RentalCarReservation";}
}