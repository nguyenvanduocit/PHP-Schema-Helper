<?php
class SchGeoShape extends SchStructuredValue{
	protected $box	=	'Text';
	protected $circle	=	'Text';
	protected $elevation	=	'Number,Text';
	protected $line	=	'Text';
	protected $polygon	=	'Text';
	function __construct(){$this->namespace = "GeoShape";}
}