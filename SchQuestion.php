<?php
class SchQuestion extends SchCreativeWork{
	protected $acceptedAnswer	=	'Answer';
	protected $answerCount	=	'Integer';
	protected $downvoteCount	=	'Integer';
	protected $suggestedAnswer	=	'Answer';
	protected $upvoteCount	=	'Integer';
	function __construct(){$this->namespace = "Question";}
}