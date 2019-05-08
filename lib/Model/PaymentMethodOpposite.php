<?php
/**
 * PaymentMethodOpposite
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
 * PaymentMethodOpposite Class Doc Comment
 *
 * @category Class
 * @package  BitPesa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethodOpposite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodOpposite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'provider' => 'string',
        'otc_permitted' => 'bool',
        'details' => 'string[]',
        'default' => 'bool',
        'fields' => 'map[string,\BitPesa\Model\FieldDescription]',
        'opposites' => '\BitPesa\Model\PaymentMethod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'provider' => null,
        'otc_permitted' => null,
        'details' => null,
        'default' => null,
        'fields' => null,
        'opposites' => null
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
        'type' => 'type',
        'provider' => 'provider',
        'otc_permitted' => 'otc_permitted',
        'details' => 'details',
        'default' => 'default',
        'fields' => 'fields',
        'opposites' => 'opposites'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'provider' => 'setProvider',
        'otc_permitted' => 'setOtcPermitted',
        'details' => 'setDetails',
        'default' => 'setDefault',
        'fields' => 'setFields',
        'opposites' => 'setOpposites'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'provider' => 'getProvider',
        'otc_permitted' => 'getOtcPermitted',
        'details' => 'getDetails',
        'default' => 'getDefault',
        'fields' => 'getFields',
        'opposites' => 'getOpposites'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['otc_permitted'] = isset($data['otc_permitted']) ? $data['otc_permitted'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['opposites'] = isset($data['opposites']) ? $data['opposites'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Details currency and type of payment.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider Identifies the payment provider.
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets otc_permitted
     *
     * @return bool|null
     */
    public function getOtcPermitted()
    {
        return $this->container['otc_permitted'];
    }

    /**
     * Sets otc_permitted
     *
     * @param bool|null $otc_permitted Are over the counter transactions permitted?
     *
     * @return $this
     */
    public function setOtcPermitted($otc_permitted)
    {
        $this->container['otc_permitted'] = $otc_permitted;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string[]|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string[]|null $details Fields required to make the payment depending on type.
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default Boolean revealing whether this is the default payout method. Only present on payout methods
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return map[string,\BitPesa\Model\FieldDescription]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param map[string,\BitPesa\Model\FieldDescription]|null $fields The fields needed for payments with this payment method with details on validation requirements
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets opposites
     *
     * @return \BitPesa\Model\PaymentMethod[]|null
     */
    public function getOpposites()
    {
        return $this->container['opposites'];
    }

    /**
     * Sets opposites
     *
     * @param \BitPesa\Model\PaymentMethod[]|null $opposites List of all providers that can be used in conjunction with the main provider
     *
     * @return $this
     */
    public function setOpposites($opposites)
    {
        $this->container['opposites'] = $opposites;

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


