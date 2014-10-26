<?php
class SchLendAction extends SchTransferAction{
	protected $borrower	=	'Person';
	function __construct(){$this->namespace = "LendAction";}
}