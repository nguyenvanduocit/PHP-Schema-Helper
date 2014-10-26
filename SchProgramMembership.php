<?php
class SchProgramMembership extends SchIntangible{
	protected $hostingOrganization	=	'Organization';
	protected $member	=	'Person,Organization';
	protected $membershipNumber	=	'Text';
	protected $programName	=	'Text';
	function __construct(){$this->namespace = "ProgramMembership";}
}