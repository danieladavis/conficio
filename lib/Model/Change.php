<?php
/**
 * Change
 *
 * PHP version 5
 *
 * @category Class
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PartnerExchangeApi
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace d2r_connectors\conficio\Model;

use \ArrayAccess;
use \d2r_connectors\conficio\ObjectSerializer;

/**
 * Change Class Doc Comment
 *
 * @category Class
 * @description The change.
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Change implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Change';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'con_cap_pro_account_id' => 'int',
        'change_date_time' => '\DateTime',
        'field_name' => 'string',
        'new_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'con_cap_pro_account_id' => 'int64',
        'change_date_time' => 'date-time',
        'field_name' => null,
        'new_value' => null
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
        'con_cap_pro_account_id' => 'ConCapProAccountId',
        'change_date_time' => 'ChangeDateTime',
        'field_name' => 'FieldName',
        'new_value' => 'NewValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'con_cap_pro_account_id' => 'setConCapProAccountId',
        'change_date_time' => 'setChangeDateTime',
        'field_name' => 'setFieldName',
        'new_value' => 'setNewValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'con_cap_pro_account_id' => 'getConCapProAccountId',
        'change_date_time' => 'getChangeDateTime',
        'field_name' => 'getFieldName',
        'new_value' => 'getNewValue'
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
        $this->container['con_cap_pro_account_id'] = isset($data['con_cap_pro_account_id']) ? $data['con_cap_pro_account_id'] : null;
        $this->container['change_date_time'] = isset($data['change_date_time']) ? $data['change_date_time'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['new_value'] = isset($data['new_value']) ? $data['new_value'] : null;
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
     * Gets con_cap_pro_account_id
     *
     * @return int|null
     */
    public function getConCapProAccountId()
    {
        return $this->container['con_cap_pro_account_id'];
    }

    /**
     * Sets con_cap_pro_account_id
     *
     * @param int|null $con_cap_pro_account_id Gets or sets the id.
     *
     * @return $this
     */
    public function setConCapProAccountId($con_cap_pro_account_id)
    {
        $this->container['con_cap_pro_account_id'] = $con_cap_pro_account_id;

        return $this;
    }

    /**
     * Gets change_date_time
     *
     * @return \DateTime|null
     */
    public function getChangeDateTime()
    {
        return $this->container['change_date_time'];
    }

    /**
     * Sets change_date_time
     *
     * @param \DateTime|null $change_date_time Gets or sets the change date time.
     *
     * @return $this
     */
    public function setChangeDateTime($change_date_time)
    {
        $this->container['change_date_time'] = $change_date_time;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string|null $field_name Gets or sets the field name.
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets new_value
     *
     * @return string|null
     */
    public function getNewValue()
    {
        return $this->container['new_value'];
    }

    /**
     * Sets new_value
     *
     * @param string|null $new_value Gets or sets the new value.
     *
     * @return $this
     */
    public function setNewValue($new_value)
    {
        $this->container['new_value'] = $new_value;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


