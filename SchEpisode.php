<?php
class SchEpisode extends SchCreativeWork{
	protected $actor	=	'Person';
	protected $director	=	'Person';
	protected $episodeNumber	=	'Text,Integer';
	protected $musicBy	=	'MusicGroup,Person';
	protected $partOfSeason	=	'Season';
	protected $partOfSeries	=	'Series';
	protected $producer	=	'Person';
	protected $productionCompany	=	'Organization';
	protected $publication	=	'PublicationEvent';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "Episode";}
}