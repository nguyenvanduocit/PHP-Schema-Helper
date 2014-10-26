<?php
class SchAnswer extends SchCreativeWork{
	protected $downvoteCount	=	'Integer';
	protected $parentItem	=	'Question';
	protected $upvoteCount	=	'Integer';
	function __construct(){$this->namespace = "Answer";}
}