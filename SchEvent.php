<?php

class SchEvent extends SchThing
{
    protected $attendee = 'Person,Organization';
    protected $doorTime = 'DateTime';
    protected $duration = 'Duration';
    protected $endDate = 'Date';
    protected $eventStatus = 'EventStatusType';
    protected $location = 'PostalAddress,Place';
    protected $offers = 'Offer';
    protected $organizer = 'Person,Organization';
    protected $performer = 'Person,Organization';
    protected $previousStartDate = 'Date';
    protected $startDate = 'Date';
    protected $subEvent = 'Event';
    protected $superEvent = 'Event';
    protected $typicalAgeRange = 'Text';
    protected $workPerformed = 'CreativeWork';

    function __construct()
    {
        $this->namespace = "Event";
    }
}