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
    private static function fillter($schema = null, $prop = null, $val = null)
    {
        if ($prop != null) {
            return $schema::getInstance()->prop($prop, $val);
        } else {
            return $schema::getInstance()->scope();
        }
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Product($prop = null, $val = null)
    {
        return self::fillter('SchProduct', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function AggregateRating($prop = null, $val = null)
    {
        return self::fillter('SchAggregateRating', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Action($prop = null, $val = null)
    {
        return self::fillter('SchAction', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Rating($prop = null, $val = null)
    {
        return self::fillter('SchRating', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Audience($prop = null, $val = null)
    {
        return self::fillter('SchAudience', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Thing($prop = null, $val = null)
    {
        return self::fillter('SchThing', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function ContactPoint($prop = null, $val = null)
    {
        return self::fillter('SchContactPoint', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function ContactPointOption($prop = null, $val = null)
    {
        return self::fillter('SchContactPointOption', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function OfferItemCondition($prop = null, $val = null)
    {
        return self::fillter('SchOfferItemCondition', $prop, $val);
    }


    /**
     * @param null $prop
     * @return mixed
     */
    public static function Offer($prop = null, $val = null)
    {
        return self::fillter('SchOffer', $prop, $val);
    }


    /**
     * @param null $prop
     * @return mixed
     */
    public static function Organization($prop = null, $val = null)
    {
        return self::fillter('SchOrganization', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Place($prop = null, $val = null)
    {
        return self::fillter('SchPlace', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function PostalAddress($prop = null, $val = null)
    {
        return self::fillter('SchPostalAddress', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Brand($prop = null, $val = null)
    {
        return self::fillter('SchBrand', $prop, $val);
    }

    /**
     * @param null $prop
     * @return mixed
     */
    public static function Review($prop = null, $val = null)
    {
        return self::fillter('SchReview', $prop, $val);
    }
}