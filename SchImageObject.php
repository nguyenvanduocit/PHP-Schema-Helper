<?php
class SchImageObject extends SchMediaObject{
	protected $caption	=	'Text';
	protected $exifData	=	'Text';
	protected $representativeOfPage	=	'Boolean';
	protected $thumbnail	=	'ImageObject';
	function __construct(){$this->namespace = "ImageObject";}
}