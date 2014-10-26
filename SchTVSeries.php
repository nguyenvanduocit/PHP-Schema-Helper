<?php
class SchTVSeries extends SchCreativeWork{
	protected $actor	=	'Person';
	protected $director	=	'Person';
	protected $endDate	=	'Date';
	protected $episode	=	'Episode';
	protected $musicBy	=	'Person,MusicGroup';
	protected $numberOfEpisodes	=	'Number';
	protected $producer	=	'Person';
	protected $productionCompany	=	'Organization';
	protected $season	=	'Season';
	protected $startDate	=	'Date';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "TVSeries";}
}