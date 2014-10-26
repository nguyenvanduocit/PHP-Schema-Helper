<?php
class SchTransferAction extends SchAction{
	protected $fromLocation	=	'Number,Place';
	protected $toLocation	=	'Number,Place';
	function __construct(){$this->namespace = "TransferAction";}
}