<?php
/**
 * Sender
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
 * Sender Class Doc Comment
 *
 * @category Class
 * @description This contains the details of the sender. The first time a specific sender is used the full details should be provided. Once a sender is created and is used, the next time you MUST only send the ID of the sender. This is so we can match the same sender across multiple transactions for KYC and audit purposes.  Personal Sender Example: &#x60;&#x60;&#x60;json {   \&quot;country\&quot;: \&quot;UG\&quot;,   \&quot;phone_country\&quot;: \&quot;UG\&quot;,   \&quot;phone_number\&quot;: \&quot;752403639\&quot;,   \&quot;email\&quot;: \&quot;example@home.org\&quot;,   \&quot;first_name\&quot;: \&quot;Johnny\&quot;,   \&quot;last_name\&quot;: \&quot;English\&quot;,   \&quot;city\&quot;: \&quot;Kampala\&quot;,   \&quot;street\&quot;: \&quot;Unknown 17-3\&quot;,   \&quot;address_description\&quot;: \&quot;Description of address\&quot;,   \&quot;postal_code\&quot;: \&quot;798983\&quot;,   \&quot;birth_date\&quot;: \&quot;1900-12-31\&quot;,   \&quot;documents\&quot;: [ ],   \&quot;ip\&quot;: \&quot;127.0.0.1\&quot;,   \&quot;external_id\&quot;: \&quot;806ec63a-a5a7-43cc-9d75-1ee74fbcc026\&quot;,   \&quot;metadata\&quot;: { } } &#x60;&#x60;&#x60;  Business Sender Example:  &#x60;&#x60;&#x60;json {   \&quot;type\&quot;: \&quot;business\&quot;,   \&quot;country\&quot;: \&quot;UG\&quot;,   \&quot;phone_country\&quot;: \&quot;UG\&quot;,   \&quot;phone_number\&quot;: \&quot;752403639\&quot;,   \&quot;email\&quot;: \&quot;example@home.org\&quot;,   \&quot;name\&quot;: \&quot;MyCompany\&quot;,   \&quot;city\&quot;: \&quot;Kampala\&quot;,   \&quot;street\&quot;: \&quot;Unknown 17-3\&quot;,   \&quot;postal_code\&quot;: \&quot;798983\&quot;,   \&quot;address_description\&quot;: \&quot;Description of address\&quot;,   \&quot;documents\&quot;: [ ],   \&quot;ip\&quot;: \&quot;127.0.0.1\&quot;,   \&quot;external_id\&quot;: \&quot;806ec63a-a5a7-43cc-9d75-1ee74fbcc026\&quot;,   \&quot;metadata\&quot;: { } } &#x60;&#x60;&#x60;  [Sender in the API documentation](https://github.com/bitpesa/api-documentation/blob/master/transaction-flow.md#sender)
 * @package  BitPesa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Sender implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Sender';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'country' => 'string',
        'phone_country' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'occupation' => 'string',
        'nationality' => 'string',
        'onboarding_status' => 'string',
        'address' => 'string',
        'description' => 'string',
        'name' => 'string',
        'city' => 'string',
        'street' => 'string',
        'address_description' => 'string',
        'postal_code' => 'string',
        'birth_date' => '\DateTime',
        'ip' => 'string',
        'documents' => '\BitPesa\Model\Document[]',
        'metadata' => 'object',
        'state' => '\BitPesa\Model\SenderState',
        'id' => 'string',
        'external_id' => 'string',
        'errors' => 'map[string,\BitPesa\Model\ValidationErrorDescription[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'country' => null,
        'phone_country' => null,
        'phone_number' => null,
        'email' => 'email',
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'occupation' => null,
        'nationality' => null,
        'onboarding_status' => null,
        'address' => null,
        'description' => null,
        'name' => null,
        'city' => null,
        'street' => null,
        'address_description' => null,
        'postal_code' => null,
        'birth_date' => 'date',
        'ip' => 'ipv4',
        'documents' => null,
        'metadata' => null,
        'state' => null,
        'id' => 'uuid',
        'external_id' => null,
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
        'type' => 'type',
        'country' => 'country',
        'phone_country' => 'phone_country',
        'phone_number' => 'phone_number',
        'email' => 'email',
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'occupation' => 'occupation',
        'nationality' => 'nationality',
        'onboarding_status' => 'onboarding_status',
        'address' => 'address',
        'description' => 'description',
        'name' => 'name',
        'city' => 'city',
        'street' => 'street',
        'address_description' => 'address_description',
        'postal_code' => 'postal_code',
        'birth_date' => 'birth_date',
        'ip' => 'ip',
        'documents' => 'documents',
        'metadata' => 'metadata',
        'state' => 'state',
        'id' => 'id',
        'external_id' => 'external_id',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'country' => 'setCountry',
        'phone_country' => 'setPhoneCountry',
        'phone_number' => 'setPhoneNumber',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'occupation' => 'setOccupation',
        'nationality' => 'setNationality',
        'onboarding_status' => 'setOnboardingStatus',
        'address' => 'setAddress',
        'description' => 'setDescription',
        'name' => 'setName',
        'city' => 'setCity',
        'street' => 'setStreet',
        'address_description' => 'setAddressDescription',
        'postal_code' => 'setPostalCode',
        'birth_date' => 'setBirthDate',
        'ip' => 'setIp',
        'documents' => 'setDocuments',
        'metadata' => 'setMetadata',
        'state' => 'setState',
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'country' => 'getCountry',
        'phone_country' => 'getPhoneCountry',
        'phone_number' => 'getPhoneNumber',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'occupation' => 'getOccupation',
        'nationality' => 'getNationality',
        'onboarding_status' => 'getOnboardingStatus',
        'address' => 'getAddress',
        'description' => 'getDescription',
        'name' => 'getName',
        'city' => 'getCity',
        'street' => 'getStreet',
        'address_description' => 'getAddressDescription',
        'postal_code' => 'getPostalCode',
        'birth_date' => 'getBirthDate',
        'ip' => 'getIp',
        'documents' => 'getDocuments',
        'metadata' => 'getMetadata',
        'state' => 'getState',
        'id' => 'getId',
        'external_id' => 'getExternalId',
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

    const TYPE_PERSON = 'person';
    const TYPE_BUSINESS = 'business';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PERSON,
            self::TYPE_BUSINESS,
        ];
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone_country'] = isset($data['phone_country']) ? $data['phone_country'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['occupation'] = isset($data['occupation']) ? $data['occupation'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['onboarding_status'] = isset($data['onboarding_status']) ? $data['onboarding_status'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['address_description'] = isset($data['address_description']) ? $data['address_description'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['phone_country'] === null) {
            $invalidProperties[] = "'phone_country' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
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
     * @param string|null $type Type of sender to create - either person or business (defaults to person)
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country of sender in 2-character alpha ISO 3166-2 country format
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone_country
     *
     * @return string
     */
    public function getPhoneCountry()
    {
        return $this->container['phone_country'];
    }

    /**
     * Sets phone_country
     *
     * @param string $phone_country Phone country of sender in 2-character alpha ISO 3166-2 country format
     *
     * @return $this
     */
    public function setPhoneCountry($phone_country)
    {
        $this->container['phone_country'] = $phone_country;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number Phone number of sender (without country callcode)
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of sender
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of sender (used only with a Personal sender)
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name Middle name of sender (used only with a Personal sender)
     *
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of sender (used only with a Personal sender)
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets occupation
     *
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param string|null $occupation Occupation of sender (used only with a Personal sender)
     *
     * @return $this
     */
    public function setOccupation($occupation)
    {
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality The nationality of the sender (used only with a Personal sender)
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets onboarding_status
     *
     * @return string|null
     */
    public function getOnboardingStatus()
    {
        return $this->container['onboarding_status'];
    }

    /**
     * Sets onboarding_status
     *
     * @param string|null $onboarding_status The onboarding status of the sender
     *
     * @return $this
     */
    public function setOnboardingStatus($onboarding_status)
    {
        $this->container['onboarding_status'] = $onboarding_status;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address The address of the sender
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the sender
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of sender (used only with a Business sender)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Sender's city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Sender's street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets address_description
     *
     * @return string|null
     */
    public function getAddressDescription()
    {
        return $this->container['address_description'];
    }

    /**
     * Sets address_description
     *
     * @param string|null $address_description Description of address
     *
     * @return $this
     */
    public function setAddressDescription($address_description)
    {
        $this->container['address_description'] = $address_description;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Zip code of sender
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime|null $birth_date Date of birth of sender
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip IP of sender
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \BitPesa\Model\Document[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \BitPesa\Model\Document[] $documents Needed for KYC checks. Required to approve the sender unless KYC is waived for your account. Please send us an empty list of documents: `\"documents\": [ ]` in the request if KYC has been waived.  If the documents already exist, please send the Document ID eg. ```JSON \"documents\": [   {     \"id\": \"b6648ba3-1c7b-4f59-8580-684899c84a07\"   } ] ```
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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
     * @param object|null $metadata Metadata of sender. You can store any detail specific to your integration here (for example the local ID of the sender on your end). When requesting sender details you will receive the sent metadata back. Also when sending sender related webhooks you will receive the details stored here as well.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \BitPesa\Model\SenderState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \BitPesa\Model\SenderState|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id Optional ID that is supplied by partner linking it to the partner's own Sender ID. Note: if present we will validate whether the sent ID is a duplicate in our system or not.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

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


