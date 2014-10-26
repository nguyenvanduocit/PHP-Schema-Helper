<?php
class SchNewsArticle extends SchArticle{
	protected $dateline	=	'Text';
	protected $printColumn	=	'Text';
	protected $printEdition	=	'Text';
	protected $printPage	=	'Text';
	protected $printSection	=	'Text';
	function __construct(){$this->namespace = "NewsArticle";}
}