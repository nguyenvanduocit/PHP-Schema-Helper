<?php
class SchClip extends SchCreativeWork{
	protected $clipNumber	=	'Integer,Text';
	protected $partOfEpisode	=	'Episode';
	protected $partOfSeason	=	'Season';
	protected $partOfSeries	=	'Series';
	protected $publication	=	'PublicationEvent';
	function __construct(){$this->namespace = "Clip";}
}