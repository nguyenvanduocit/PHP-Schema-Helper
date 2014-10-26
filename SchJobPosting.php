<?php
class SchJobPosting extends SchIntangible{
	protected $baseSalary	=	'Number';
	protected $benefits	=	'Text';
	protected $datePosted	=	'Date';
	protected $educationRequirements	=	'Text';
	protected $employmentType	=	'Text';
	protected $experienceRequirements	=	'Text';
	protected $hiringOrganization	=	'Organization';
	protected $incentives	=	'Text';
	protected $industry	=	'Text';
	protected $jobLocation	=	'Place';
	protected $occupationalCategory	=	'Text';
	protected $qualifications	=	'Text';
	protected $responsibilities	=	'Text';
	protected $salaryCurrency	=	'Text';
	protected $skills	=	'Text';
	protected $specialCommitments	=	'Text';
	protected $title	=	'Text';
	protected $workHours	=	'Text';
	function __construct(){$this->namespace = "JobPosting";}
}