<?php
class SchPlace extends SchThing{
	protected $address	=	'PostalAddress';
	protected $aggregateRating	=	'AggregateRating';
	protected $containedIn	=	'Place';
	protected $event	=	'Event';
	protected $faxNumber	=	'Text';
	protected $geo	=	'GeoCoordinates,GeoShape';
	protected $globalLocationNumber	=	'Text';
	protected $hasMap	=	'URL,Map';
	protected $interactionCount	=	'Text';
	protected $isicV4	=	'Text';
	protected $logo	=	'URL,ImageObject';
	protected $openingHoursSpecification	=	'OpeningHoursSpecification';
	protected $photo	=	'Photograph,ImageObject';
	protected $review	=	'Review';
	protected $telephone	=	'Text';
	function __construct(){$this->namespace = "Place";}
}