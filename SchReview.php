<?php
class SchReview extends SchCreativeWork{
	protected $itemReviewed	=	'Thing';
	protected $reviewBody	=	'Text';
	protected $reviewRating	=	'Rating';
	function __construct(){$this->namespace = "Review";}
}