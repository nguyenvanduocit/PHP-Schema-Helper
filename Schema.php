<?php

/**
 * Project : phpschema
 * User: thuytien
 * Date: 10/23/2014
 * Time: 3:07 PM
 */

class Schema
{
    /**
     * @param null $schema
     * @param null $prop
     * @return mixed
     */
    private static function fillter($schema = null, $prop = null)
    {
        if($prop != null){
            return $schema::getInstance()->prop($prop);
        }else{
            return $schema::getInstance()->scope();
        }
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Product($prop = null)
    {
        return self::fillter('SchProduct', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function AggregateRating($prop = null)
    {
        return self::fillter('SchAggregateRating', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Action($prop = null)
    {
        return self::fillter('SchAction', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Rating($prop = null)
    {
        return self::fillter('SchRating', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Audience($prop = null)
    {
        return self::fillter('SchAudience', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Thing($prop = null)
    {
        return self::fillter('SchThing', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function ContactPoint($prop = null)
    {
        return self::fillter('SchContactPoint', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function ContactPointOption($prop = null)
    {
        return self::fillter('SchContactPointOption', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function OfferItemCondition($prop = null)
    {
        return self::fillter('SchOfferItemCondition', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Organization($prop = null)
    {
        return self::fillter('SchOrganization', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Place($prop = null)
    {
        return self::fillter('SchPlace', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function PostalAddress($prop = null)
    {
        return self::fillter('SchPostalAddress', $prop);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Brand($prop = null)
    {
        return self::fillter('SchBrand', $prop);
    }
}