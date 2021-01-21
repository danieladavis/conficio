<?php
/**
 * Transaction
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
 * Transaction Class Doc Comment
 *
 * @category Class
 * @description payment record
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'con_cap_pro_account_id' => 'int',
        'posting_user_id' => 'string',
        'posting_user_name' => 'string',
        'posting_time' => '\DateTime',
        'transaction_date' => '\DateTime',
        'transaction_id' => 'string',
        'transaction_code' => 'string',
        'transaction_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'con_cap_pro_account_id' => 'int64',
        'posting_user_id' => null,
        'posting_user_name' => null,
        'posting_time' => 'date-time',
        'transaction_date' => 'date-time',
        'transaction_id' => null,
        'transaction_code' => null,
        'transaction_amount' => 'double'
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
        'posting_user_id' => 'PostingUserId',
        'posting_user_name' => 'PostingUserName',
        'posting_time' => 'PostingTime',
        'transaction_date' => 'TransactionDate',
        'transaction_id' => 'TransactionId',
        'transaction_code' => 'TransactionCode',
        'transaction_amount' => 'TransactionAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'con_cap_pro_account_id' => 'setConCapProAccountId',
        'posting_user_id' => 'setPostingUserId',
        'posting_user_name' => 'setPostingUserName',
        'posting_time' => 'setPostingTime',
        'transaction_date' => 'setTransactionDate',
        'transaction_id' => 'setTransactionId',
        'transaction_code' => 'setTransactionCode',
        'transaction_amount' => 'setTransactionAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'con_cap_pro_account_id' => 'getConCapProAccountId',
        'posting_user_id' => 'getPostingUserId',
        'posting_user_name' => 'getPostingUserName',
        'posting_time' => 'getPostingTime',
        'transaction_date' => 'getTransactionDate',
        'transaction_id' => 'getTransactionId',
        'transaction_code' => 'getTransactionCode',
        'transaction_amount' => 'getTransactionAmount'
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
        $this->container['posting_user_id'] = isset($data['posting_user_id']) ? $data['posting_user_id'] : null;
        $this->container['posting_user_name'] = isset($data['posting_user_name']) ? $data['posting_user_name'] : null;
        $this->container['posting_time'] = isset($data['posting_time']) ? $data['posting_time'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['transaction_code'] = isset($data['transaction_code']) ? $data['transaction_code'] : null;
        $this->container['transaction_amount'] = isset($data['transaction_amount']) ? $data['transaction_amount'] : null;
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
     * Gets posting_user_id
     *
     * @return string|null
     */
    public function getPostingUserId()
    {
        return $this->container['posting_user_id'];
    }

    /**
     * Sets posting_user_id
     *
     * @param string|null $posting_user_id Gets or sets the posting user id.
     *
     * @return $this
     */
    public function setPostingUserId($posting_user_id)
    {
        $this->container['posting_user_id'] = $posting_user_id;

        return $this;
    }

    /**
     * Gets posting_user_name
     *
     * @return string|null
     */
    public function getPostingUserName()
    {
        return $this->container['posting_user_name'];
    }

    /**
     * Sets posting_user_name
     *
     * @param string|null $posting_user_name Gets or sets the posting user name.
     *
     * @return $this
     */
    public function setPostingUserName($posting_user_name)
    {
        $this->container['posting_user_name'] = $posting_user_name;

        return $this;
    }

    /**
     * Gets posting_time
     *
     * @return \DateTime|null
     */
    public function getPostingTime()
    {
        return $this->container['posting_time'];
    }

    /**
     * Sets posting_time
     *
     * @param \DateTime|null $posting_time Gets or sets the posting time.
     *
     * @return $this
     */
    public function setPostingTime($posting_time)
    {
        $this->container['posting_time'] = $posting_time;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return \DateTime|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime|null $transaction_date Gets or sets the transaction date.
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id Gets or sets the transaction id.
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_code
     *
     * @return string|null
     */
    public function getTransactionCode()
    {
        return $this->container['transaction_code'];
    }

    /**
     * Sets transaction_code
     *
     * @param string|null $transaction_code Gets or sets the transaction code.
     *
     * @return $this
     */
    public function setTransactionCode($transaction_code)
    {
        $this->container['transaction_code'] = $transaction_code;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return double|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param double|null $transaction_amount Gets or sets the transaction amount.
     *
     * @return $this
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

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


