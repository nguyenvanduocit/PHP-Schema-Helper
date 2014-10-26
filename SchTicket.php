<?php
class SchTicket extends SchIntangible{
	protected $dateIssued	=	'DateTime';
	protected $issuedBy	=	'Organization';
	protected $priceCurrency	=	'Text';
	protected $ticketNumber	=	'Text';
	protected $ticketToken	=	'URL,Text';
	protected $ticketedSeat	=	'Seat';
	protected $totalPrice	=	'PriceSpecification,Number,Text';
	protected $underName	=	'Person,Organization';
	function __construct(){$this->namespace = "Ticket";}
}