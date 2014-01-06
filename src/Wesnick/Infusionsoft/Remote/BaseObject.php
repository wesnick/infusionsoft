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

    public function getInfusionsoftFields()
    {
        return array_keys($this->getInfusionsoftPropertyMap());
    }

    public function getInfusionsoftPropertyMap()
    {
        if (property_exists($this, 'propertyMap')) {
            return $this->propertyMap;
        }
        return array();
    }
} 
