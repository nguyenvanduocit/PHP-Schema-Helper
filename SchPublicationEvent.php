<?php
class SchPublicationEvent extends SchEvent{
	protected $free	=	'Boolean';
	protected $publishedOn	=	'BroadcastService';
	function __construct(){$this->namespace = "PublicationEvent";}
}