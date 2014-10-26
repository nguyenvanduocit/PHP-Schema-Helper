<?php
class SchReservationPackage extends SchReservation{
	protected $subReservation	=	'Reservation';
	function __construct(){$this->namespace = "ReservationPackage";}
}