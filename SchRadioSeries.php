<?php
class SchRadioSeries extends SchSeries{
	protected $actor	=	'Person';
	protected $director	=	'Person';
	protected $episode	=	'Episode';
	protected $musicBy	=	'Person,MusicGroup';
	protected $numberOfEpisodes	=	'Number';
	protected $producer	=	'Person';
	protected $productionCompany	=	'Organization';
	protected $season	=	'Season';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "RadioSeries";}
}