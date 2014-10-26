<?php
class SchGeoCoordinates extends SchStructuredValue{
	protected $elevation	=	'Number,Text';
	protected $latitude	=	'Number,Text';
	protected $longitude	=	'Number,Text';
	function __construct(){$this->namespace = "GeoCoordinates";}
}