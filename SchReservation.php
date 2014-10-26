<?php
class SchReservation extends SchIntangible{
	protected $bookingTime	=	'DateTime';
	protected $broker	=	'Person,Organization';
	protected $modifiedTime	=	'DateTime';
	protected $priceCurrency	=	'Text';
	protected $programMembershipUsed	=	'ProgramMembership';
	protected $provider	=	'Person,Organization';
	protected $reservationFor	=	'Thing';
	protected $reservationId	=	'Text';
	protected $reservationStatus	=	'ReservationStatusType';
	protected $reservedTicket	=	'Ticket';
	protected $totalPrice	=	'PriceSpecification,Number,Text';
	protected $underName	=	'Person,Organization';
	function __construct(){$this->namespace = "Reservation";}
}