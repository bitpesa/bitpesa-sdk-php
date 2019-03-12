<?php
/**
 * PayoutMethodGenderEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  BitPesa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BitPesa API
 *
 * Reference documentation for the BitPesa API V1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BitPesa\Model;
use \BitPesa\ObjectSerializer;

/**
 * PayoutMethodGenderEnum Class Doc Comment
 *
 * @category Class
 * @description The gender of the sender:  - &#x60;M&#x60;: Male - &#x60;F&#x60;: Female
 * @package  BitPesa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodGenderEnum
{
    /**
     * Possible values of this enum
     */
    const M = 'M';
    const F = 'F';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::M,
            self::F,
        ];
    }
}


