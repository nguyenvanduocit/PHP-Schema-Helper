<?php
class SchMediaObject extends SchCreativeWork{
	protected $associatedArticle	=	'NewsArticle';
	protected $bitrate	=	'Text';
	protected $contentSize	=	'Text';
	protected $contentUrl	=	'URL';
	protected $duration	=	'Duration';
	protected $embedUrl	=	'URL';
	protected $encodesCreativeWork	=	'CreativeWork';
	protected $encodingFormat	=	'Text';
	protected $expires	=	'Date';
	protected $height	=	'QuantitativeValue,Distance';
	protected $interactionCount	=	'Text';
	protected $offers	=	'Offer';
	protected $playerType	=	'Text';
	protected $productionCompany	=	'Organization';
	protected $publication	=	'PublicationEvent';
	protected $regionsAllowed	=	'Place';
	protected $requiresSubscription	=	'Boolean';
	protected $uploadDate	=	'Date';
	protected $width	=	'QuantitativeValue,Distance';
	function __construct(){$this->namespace = "MediaObject";}
}