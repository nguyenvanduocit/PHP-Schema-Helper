<?php
class SchPublicationIssue extends SchCreativeWork{
	protected $issueNumber	=	'Integer,Text';
	protected $pageEnd	=	'Integer,Text';
	protected $pageStart	=	'Integer,Text';
	protected $pagination	=	'Text';
	function __construct(){$this->namespace = "PublicationIssue";}
}