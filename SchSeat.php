<?php
class SchSeat extends SchIntangible{
	protected $seatNumber	=	'Text';
	protected $seatRow	=	'Text';
	protected $seatSection	=	'Text';
	protected $seatingType	=	'QualitativeValue,Text';
	function __construct(){$this->namespace = "Seat";}
}