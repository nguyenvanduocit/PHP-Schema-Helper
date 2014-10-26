<?php
class SchExerciseAction extends SchPlayAction{
	protected $course	=	'Place';
	protected $diet	=	'Diet';
	protected $distance	=	'Distance';
	protected $exercisePlan	=	'ExercisePlan';
	protected $exerciseType	=	'Text';
	protected $fromLocation	=	'Place,Number';
	protected $opponent	=	'Person';
	protected $sportsActivityLocation	=	'SportsActivityLocation';
	protected $sportsEvent	=	'SportsEvent';
	protected $sportsTeam	=	'SportsTeam';
	protected $toLocation	=	'Place,Number';
	function __construct(){$this->namespace = "ExerciseAction";}
}