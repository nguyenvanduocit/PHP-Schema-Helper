<?php
class SchAirport extends SchCivicStructure{
	protected $iataCode	=	'Text';
	protected $icaoCode	=	'Text';
	function __construct(){$this->namespace = "Airport";}
}