<?php
class SchFlight extends SchIntangible{
	protected $aircraft	=	'Vehicle,Text';
	protected $arrivalAirport	=	'Airport';
	protected $arrivalGate	=	'Text';
	protected $arrivalTerminal	=	'Text';
	protected $arrivalTime	=	'DateTime';
	protected $departureAirport	=	'Airport';
	protected $departureGate	=	'Text';
	protected $departureTerminal	=	'Text';
	protected $departureTime	=	'DateTime';
	protected $estimatedFlightDuration	=	'Duration,Text';
	protected $flightDistance	=	'Text,Distance';
	protected $flightNumber	=	'Text';
	protected $mealService	=	'Text';
	protected $provider	=	'Person,Organization';
	protected $seller	=	'Person,Organization';
	protected $webCheckinTime	=	'DateTime';
	function __construct(){$this->namespace = "Flight";}
}