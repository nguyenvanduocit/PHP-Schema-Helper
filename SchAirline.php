<?php
class SchAirline extends SchOrganization{
	protected $iataCode	=	'Text';
	function __construct(){$this->namespace = "Airline";}
}