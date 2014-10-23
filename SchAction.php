<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:47 AM
 */
//TODO : add progerty type
class SchAction extends SchThing
{
    protected $properties = array(
        "properties" => "properties",
        "actionStatus" => "actionStatus",
        "agent" => "agent",
        "endTime" => "endTime",
        "instrument" => "instrument",
        "location" => "location",
        "object" => "object",
        "participant" => "participant",
        "result" => "result",
        "startTime" => "startTime",
        "target" => "target"
    );

    function __construct()
    {
        $this->namespace = 'Action';

    }
}