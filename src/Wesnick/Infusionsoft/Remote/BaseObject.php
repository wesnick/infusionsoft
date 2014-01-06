<?php

namespace Wesnick\Infusionsoft\Remote;


abstract class BaseObject implements InfusionsoftObject
{

    public function toInfusionsoftArray()
    {
        $localVars = get_object_vars($this);
        unset($localVars['propertyMap']);
        return array_filter($localVars);
    }

    public static function getInfusionsoftFields()
    {
        return array_keys(static::getInfusionsoftPropertyMap());
    }

    public static function getInfusionsoftPropertyMap()
    {

        if (property_exists(get_called_class(), 'propertyMap')) {
            return static::$propertyMap;
        }
        return array();
    }
} 
