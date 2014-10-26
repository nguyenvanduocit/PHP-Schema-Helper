<?php
class SchArticle extends SchCreativeWork{
	protected $articleBody	=	'Text';
	protected $articleSection	=	'Text';
	protected $pageEnd	=	'Integer,Text';
	protected $pageStart	=	'Integer,Text';
	protected $pagination	=	'Text';
	protected $wordCount	=	'Integer';
	function __construct(){$this->namespace = "Article";}
}