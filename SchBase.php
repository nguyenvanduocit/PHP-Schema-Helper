<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:15 AM
 */
abstract class SchBase implements SchBaseInterface
{
    /**
     * @var array
     */
    protected $properties = array();
    /**
     * @var string
     */
    protected $protocol = 'http';
    /**
     * @var string
     */
    protected $namespace = '';

    /**
     * @return static
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    /**
     * @return string
     */
    public function scope()
    {
        return sprintf("itemscope itemtype=\"%1s\"", $this->getURL());
    }

    /**
     * @param $prop
     * @return string
     */
    public function prop($prop)
    {
        if(is_string($prop)) {
            if (isset($this->properties[$prop])) {
                return sprintf("itemprop=\"%1s\"", $this->properties[$prop]);
            }
        }elseif(is_array($prop)){
            if (isset($this->properties[$prop['prop']])) {
                return sprintf("<span itemprop=\"%1s\">%2s</span>", $this->properties[$prop['prop']], $prop['value']);
            }
        }
        return '';
    }

    /**
     * @return string
     */
    private function getURL()
    {
        return $this->protocol . "//schema.org/" . $this->namespace;
    }
}