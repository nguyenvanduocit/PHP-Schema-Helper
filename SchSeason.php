<?php
class SchSeason extends SchCreativeWork{
	protected $endDate	=	'Date';
	protected $episode	=	'Episode';
	protected $numberOfEpisodes	=	'Number';
	protected $partOfSeries	=	'Series';
	protected $producer	=	'Person';
	protected $productionCompany	=	'Organization';
	protected $seasonNumber	=	'Integer,Text';
	protected $startDate	=	'Date';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "Season";}
}