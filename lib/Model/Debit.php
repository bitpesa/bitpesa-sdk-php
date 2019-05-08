<?php
/**
 * Debit
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
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BitPesa\Model;

use \ArrayAccess;
use \BitPesa\ObjectSerializer;

/**
 * Debit Class Doc Comment
 *
 * @category Class
 * @description Debits are used to fund transactions from your internal BitPesa balance.
 * @package  BitPesa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Debit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Debit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'double',
        'currency' => 'string',
        'to_type' => 'string',
        'to_id' => 'string',
        'metadata' => 'object',
        'id' => 'string',
        'created_at' => '\DateTime',
        'usd_amount' => 'double',
        'running_balance' => 'double',
        'errors' => 'map[string,\BitPesa\Model\ValidationErrorDescription[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => 'double',
        'currency' => null,
        'to_type' => null,
        'to_id' => 'uuid',
        'metadata' => null,
        'id' => 'uuid',
        'created_at' => 'date-time',
        'usd_amount' => 'double',
        'running_balance' => 'double',
        'errors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'currency' => 'currency',
        'to_type' => 'to_type',
        'to_id' => 'to_id',
        'metadata' => 'metadata',
        'id' => 'id',
        'created_at' => 'created_at',
        'usd_amount' => 'usd_amount',
        'running_balance' => 'running_balance',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'to_type' => 'setToType',
        'to_id' => 'setToId',
        'metadata' => 'setMetadata',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'usd_amount' => 'setUsdAmount',
        'running_balance' => 'setRunningBalance',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'to_type' => 'getToType',
        'to_id' => 'getToId',
        'metadata' => 'getMetadata',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'usd_amount' => 'getUsdAmount',
        'running_balance' => 'getRunningBalance',
        'errors' => 'getErrors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['to_type'] = isset($data['to_type']) ? $data['to_type'] : null;
        $this->container['to_id'] = isset($data['to_id']) ? $data['to_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['usd_amount'] = isset($data['usd_amount']) ? $data['usd_amount'] : null;
        $this->container['running_balance'] = isset($data['running_balance']) ? $data['running_balance'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['to_type'] === null) {
            $invalidProperties[] = "'to_type' can't be null";
        }
        if ($this->container['to_id'] === null) {
            $invalidProperties[] = "'to_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The amount to be debited from your account.  The “amount” parameter is optional - - if included, it must equal the amount required to fund the transaction. - if omitted, it will default to the amount required to fund the transaction.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency of the amount in 3-character alpha ISO 4217 currency format
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets to_type
     *
     * @return string
     */
    public function getToType()
    {
        return $this->container['to_type'];
    }

    /**
     * Sets to_type
     *
     * @param string $to_type Describes what the debit is funding
     *
     * @return $this
     */
    public function setToType($to_type)
    {
        $this->container['to_type'] = $to_type;

        return $this;
    }

    /**
     * Gets to_id
     *
     * @return string
     */
    public function getToId()
    {
        return $this->container['to_id'];
    }

    /**
     * Sets to_id
     *
     * @param string $to_id The ID of the resource the debit is funding
     *
     * @return $this
     */
    public function setToId($to_id)
    {
        $this->container['to_id'] = $to_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Metadata of account debit
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date and time that the debit was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets usd_amount
     *
     * @return double|null
     */
    public function getUsdAmount()
    {
        return $this->container['usd_amount'];
    }

    /**
     * Sets usd_amount
     *
     * @param double|null $usd_amount The amount to be debited from your account converted to USD
     *
     * @return $this
     */
    public function setUsdAmount($usd_amount)
    {
        $this->container['usd_amount'] = $usd_amount;

        return $this;
    }

    /**
     * Gets running_balance
     *
     * @return double|null
     */
    public function getRunningBalance()
    {
        return $this->container['running_balance'];
    }

    /**
     * Sets running_balance
     *
     * @param double|null $running_balance The total amount remaining in your account after the debit call
     *
     * @return $this
     */
    public function setRunningBalance($running_balance)
    {
        $this->container['running_balance'] = $running_balance;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return map[string,\BitPesa\Model\ValidationErrorDescription[]]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param map[string,\BitPesa\Model\ValidationErrorDescription[]]|null $errors The fields that have some problems and don't pass validation
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


