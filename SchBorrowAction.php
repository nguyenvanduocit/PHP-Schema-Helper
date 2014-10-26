<?php
class SchBorrowAction extends SchTransferAction{
	protected $lender	=	'Person';
	function __construct(){$this->namespace = "BorrowAction";}
}