<?php
class SchAggregateOffer extends SchOffer{
	protected $highPrice	=	'Number,Text';
	protected $lowPrice	=	'Number,Text';
	protected $offerCount	=	'Integer';
	function __construct(){$this->namespace = "AggregateOffer";}
}