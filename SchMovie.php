<?php
class SchMovie extends SchCreativeWork{
	protected $actor	=	'Person';
	protected $director	=	'Person';
	protected $duration	=	'Duration';
	protected $musicBy	=	'Person,MusicGroup';
	protected $producer	=	'Person';
	protected $productionCompany	=	'Organization';
	protected $trailer	=	'VideoObject';
	function __construct(){$this->namespace = "Movie";}
}