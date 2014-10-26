<?php

class SchChooseAction extends SchAssessAction
{
    protected $option = 'Thing,Text';

    function __construct()
    {
        $this->namespace = "ChooseAction";
    }
}