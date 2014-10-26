<?php
class SchUserComments extends SchUserInteraction{
	protected $commentText	=	'Text';
	protected $commentTime	=	'Date';
	protected $creator	=	'Person,Organization';
	protected $discusses	=	'CreativeWork';
	protected $replyToUrl	=	'URL';
	function __construct(){$this->namespace = "UserComments";}
}