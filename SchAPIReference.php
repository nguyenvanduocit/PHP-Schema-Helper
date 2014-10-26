<?php
class SchAPIReference extends SchTechArticle{
	protected $assembly	=	'Text';
	protected $assemblyVersion	=	'Text';
	protected $programmingModel	=	'Text';
	protected $targetPlatform	=	'Text';
	function __construct(){$this->namespace = "APIReference";}
}