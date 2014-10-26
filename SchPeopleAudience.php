<?php
class SchPeopleAudience extends SchAudience{
	protected $healthCondition	=	'MedicalCondition';
	protected $requiredGender	=	'Text';
	protected $requiredMaxAge	=	'Integer';
	protected $requiredMinAge	=	'Integer';
	protected $suggestedGender	=	'Text';
	protected $suggestedMaxAge	=	'Number';
	protected $suggestedMinAge	=	'Number';
	function __construct(){$this->namespace = "PeopleAudience";}
}