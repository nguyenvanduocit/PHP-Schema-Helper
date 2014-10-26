<?php
class SchExercisePlan extends SchCreativeWork{
	protected $activityDuration	=	'Duration';
	protected $activityFrequency	=	'Text';
	protected $additionalVariable	=	'Text';
	protected $exerciseType	=	'Text';
	protected $intensity	=	'Text';
	protected $repetitions	=	'Number';
	protected $restPeriods	=	'Text';
	protected $workload	=	'Energy';
	function __construct(){$this->namespace = "ExercisePlan";}
}