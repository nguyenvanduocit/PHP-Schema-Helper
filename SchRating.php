<?php
class SchRating extends SchIntangible{
	protected $bestRating	=	'Number,Text';
	protected $ratingValue	=	'Text';
	protected $worstRating	=	'Number,Text';
	function __construct(){$this->namespace = "Rating";}
}