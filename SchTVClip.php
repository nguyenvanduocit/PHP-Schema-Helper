<?php
class SchTVClip extends SchClip{
	protected $partOfSeason	=	'Season';
	protected $partOfSeries	=	'Series';
	function __construct(){$this->namespace = "TVClip";}
}