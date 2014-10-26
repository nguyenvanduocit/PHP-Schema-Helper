<?php
class SchPublicationVolume extends SchCreativeWork{
	protected $pageEnd	=	'Integer,Text';
	protected $pageStart	=	'Integer,Text';
	protected $pagination	=	'Text';
	protected $volumeNumber	=	'Integer,Text';
	function __construct(){$this->namespace = "PublicationVolume";}
}