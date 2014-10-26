<?php
class SchAlignmentObject extends SchIntangible{
	protected $alignmentType	=	'Text';
	protected $educationalFramework	=	'Text';
	protected $targetDescription	=	'Text';
	protected $targetName	=	'Text';
	protected $targetUrl	=	'URL';
	function __construct(){$this->namespace = "AlignmentObject";}
}