<?php
/**
 * RecipientState
 *
 * PHP version 5
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TransferZero API
 *
 * Reference documentation for the TransferZero API V1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TransferZero\Model;
use \TransferZero\ObjectSerializer;

/**
 * RecipientState Class Doc Comment
 *
 * @category Class
 * @description The state of the recipient. Can be one of the following:  * &#x60;initial&#x60;: We haven&#39;t initiated the payout yet, you can still cancel the transaction * &#x60;pending&#x60;: Payout has been initiated and we&#39;re waiting from a response from the provider. The transaction cannot be cancelled * &#x60;success&#x60;: Payout is done, and the recipient has been paid. * &#x60;error&#x60;: There was an error from the provider, you can find more details in the &#x60;state_reason&#x60; attribute. We will usually retry the transaction at a later date. You can either wait, edit the recipient or cancel the transaction. * &#x60;refunded&#x60;: You asked us to cancel the transaction and we refunded the money. * &#x60;manual&#x60;: There were too many errors on this transaction, and we stopped retrying. Please edit the recipient, contact us or cancel the transaction. * &#x60;stuck&#x60;: We didn&#39;t receive a response from the provider in time, and we don&#39;t know whether it has been paid our not. Please contact us for further details. * &#x60;overpaid&#x60;: The recipient was paid out more than was requested (not applicable for most of the payout providers) * &#x60;canceled&#x60;: The transaction has been cancelled, and we will refund the money soon * &#x60;exception&#x60;: Some exception has happened; please contact TransferZero
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RecipientState
{
    /**
     * Possible values of this enum
     */
    const INITIAL = 'initial';
    const PENDING = 'pending';
    const SUCCESS = 'success';
    const ERROR = 'error';
    const REFUNDED = 'refunded';
    const MANUAL = 'manual';
    const STUCK = 'stuck';
    const OVERPAID = 'overpaid';
    const CANCELED = 'canceled';
    const EXCEPTION = 'exception';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INITIAL,
            self::PENDING,
            self::SUCCESS,
            self::ERROR,
            self::REFUNDED,
            self::MANUAL,
            self::STUCK,
            self::OVERPAID,
            self::CANCELED,
            self::EXCEPTION,
        ];
    }
}


