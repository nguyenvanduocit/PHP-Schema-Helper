<?php
class SchCode extends SchCreativeWork{
	protected $codeRepository	=	'URL';
	protected $programmingLanguage	=	'Thing';
	protected $runtime	=	'Text';
	protected $sampleType	=	'Text';
	protected $targetProduct	=	'SoftwareApplication';
	function __construct(){$this->namespace = "Code";}
}