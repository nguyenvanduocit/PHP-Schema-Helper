<?php
class SchBusTrip extends SchIntangible{
	protected $arrivalBusStop	=	'BusStop,BusStation';
	protected $arrivalTime	=	'DateTime';
	protected $busName	=	'Text';
	protected $busNumber	=	'Text';
	protected $departureBusStop	=	'BusStop,BusStation';
	protected $departureTime	=	'DateTime';
	protected $provider	=	'Person,Organization';
	function __construct(){$this->namespace = "BusTrip";}
}