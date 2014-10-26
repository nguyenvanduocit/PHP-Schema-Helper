<?php
class SchSoftwareApplication extends SchCreativeWork{
	protected $applicationCategory	=	'URL,Text';
	protected $applicationSubCategory	=	'URL,Text';
	protected $applicationSuite	=	'Text';
	protected $countriesNotSupported	=	'Text';
	protected $countriesSupported	=	'Text';
	protected $device	=	'Text';
	protected $downloadUrl	=	'URL';
	protected $featureList	=	'URL,Text';
	protected $fileFormat	=	'Text';
	protected $fileSize	=	'Integer';
	protected $installUrl	=	'URL';
	protected $memoryRequirements	=	'URL,Text';
	protected $operatingSystem	=	'Text';
	protected $permissions	=	'Text';
	protected $processorRequirements	=	'Text';
	protected $releaseNotes	=	'URL,Text';
	protected $requirements	=	'URL,Text';
	protected $screenshot	=	'URL,ImageObject';
	protected $softwareVersion	=	'Text';
	protected $storageRequirements	=	'URL,Text';
	function __construct(){$this->namespace = "SoftwareApplication";}
}