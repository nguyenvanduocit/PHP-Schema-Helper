<?php
class SchOrder extends SchIntangible{
	protected $acceptedOffer	=	'Offer';
	protected $billingAddress	=	'PostalAddress';
	protected $broker	=	'Person,Organization';
	protected $confirmationNumber	=	'Text';
	protected $customer	=	'Person,Organization';
	protected $discount	=	'Number,Text';
	protected $discountCode	=	'Text';
	protected $discountCurrency	=	'Text';
	protected $isGift	=	'Boolean';
	protected $orderDate	=	'DateTime';
	protected $orderNumber	=	'Text';
	protected $orderStatus	=	'OrderStatus';
	protected $orderedItem	=	'Product';
	protected $paymentDue	=	'DateTime';
	protected $paymentMethod	=	'PaymentMethod';
	protected $paymentMethodId	=	'Text';
	protected $paymentUrl	=	'URL';
	protected $seller	=	'Person,Organization';
	function __construct(){$this->namespace = "Order";}
}