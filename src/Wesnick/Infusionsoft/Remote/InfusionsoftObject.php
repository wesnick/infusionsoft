<?php
/**
 * @file InfusionsoftObject.php
 */
namespace Wesnick\Infusionsoft\Remote;

interface InfusionsoftObject
{
    public function toInfusionsoftArray();

    public static function getInfusionsoftFields();

    public static function getInfusionsoftPropertyMap();
}
