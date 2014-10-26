<?php
class SchRadioSeason extends SchSeason{
	protected $episode	=	'Episode';
	protected $numberOfEpisodes	=	'Number';
	protected $partOfSeries	=	'Series';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "RadioSeason";}
}