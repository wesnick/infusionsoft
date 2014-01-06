<?php
/**
 * @file InfusionsoftObject.php
 */
namespace Wesnick\Infusionsoft\Remote;

interface InfusionsoftObject
{
    public function toInfusionsoftArray();

    public function getInfusionsoftFields();

    public function getInfusionsoftPropertyMap();
}
