<?php
class SchTrainTrip extends SchIntangible{
	protected $arrivalPlatform	=	'Text';
	protected $arrivalStation	=	'TrainStation';
	protected $arrivalTime	=	'DateTime';
	protected $departurePlatform	=	'Text';
	protected $departureStation	=	'TrainStation';
	protected $departureTime	=	'DateTime';
	protected $provider	=	'Person,Organization';
	protected $trainName	=	'Text';
	protected $trainNumber	=	'Text';
	function __construct(){$this->namespace = "TrainTrip";}
}