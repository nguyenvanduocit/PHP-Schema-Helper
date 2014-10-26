<?php
class SchMoveAction extends SchAction{
	protected $fromLocation	=	'Number,Place';
	protected $toLocation	=	'Number,Place';
	function __construct(){$this->namespace = "MoveAction";}
}