<?php
class SchRadioEpisode extends SchEpisode{
	protected $actor	=	'Person';
	protected $director	=	'Person';
	protected $musicBy	=	'Person,MusicGroup';
	protected $partOfSeason	=	'Season';
	protected $partOfSeries	=	'Series';
	protected $producer	=	'Person';
	protected $productionCompany	=	'Organization';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "RadioEpisode";}
}