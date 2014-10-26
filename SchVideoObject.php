<?php
class SchVideoObject extends SchMediaObject{
	protected $caption	=	'Text';
	protected $productionCompany	=	'Organization';
	protected $thumbnail	=	'ImageObject';
	protected $transcript	=	'Text';
	protected $videoFrameSize	=	'Text';
	protected $videoQuality	=	'Text';
	function __construct(){$this->namespace = "VideoObject";}
}