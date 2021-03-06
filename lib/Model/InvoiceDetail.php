<?php
/**
 * InvoiceDetail
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
 * InvoiceDetail Class Doc Comment
 *
 * @category Class
 * @description The invoice detail.
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'con_cap_pro_account_id' => 'int',
        'invoice_id' => 'string',
        'transaction_date' => '\DateTime',
        'agency_transaction_id' => 'string',
        'creditor_transaction_id' => 'string',
        'posting_date' => '\DateTime',
        'transaction_code' => 'string',
        'transaction_amount' => 'double',
        'commission_rate' => 'double',
        'commission' => 'double',
        'amount_due_agency' => 'double',
        'amount_due_creditor' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'con_cap_pro_account_id' => 'int64',
        'invoice_id' => null,
        'transaction_date' => 'date-time',
        'agency_transaction_id' => null,
        'creditor_transaction_id' => null,
        'posting_date' => 'date-time',
        'transaction_code' => null,
        'transaction_amount' => 'double',
        'commission_rate' => 'double',
        'commission' => 'double',
        'amount_due_agency' => 'double',
        'amount_due_creditor' => 'double'
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
        'invoice_id' => 'InvoiceId',
        'transaction_date' => 'TransactionDate',
        'agency_transaction_id' => 'AgencyTransactionId',
        'creditor_transaction_id' => 'CreditorTransactionId',
        'posting_date' => 'PostingDate',
        'transaction_code' => 'TransactionCode',
        'transaction_amount' => 'TransactionAmount',
        'commission_rate' => 'CommissionRate',
        'commission' => 'Commission',
        'amount_due_agency' => 'AmountDueAgency',
        'amount_due_creditor' => 'AmountDueCreditor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'con_cap_pro_account_id' => 'setConCapProAccountId',
        'invoice_id' => 'setInvoiceId',
        'transaction_date' => 'setTransactionDate',
        'agency_transaction_id' => 'setAgencyTransactionId',
        'creditor_transaction_id' => 'setCreditorTransactionId',
        'posting_date' => 'setPostingDate',
        'transaction_code' => 'setTransactionCode',
        'transaction_amount' => 'setTransactionAmount',
        'commission_rate' => 'setCommissionRate',
        'commission' => 'setCommission',
        'amount_due_agency' => 'setAmountDueAgency',
        'amount_due_creditor' => 'setAmountDueCreditor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'con_cap_pro_account_id' => 'getConCapProAccountId',
        'invoice_id' => 'getInvoiceId',
        'transaction_date' => 'getTransactionDate',
        'agency_transaction_id' => 'getAgencyTransactionId',
        'creditor_transaction_id' => 'getCreditorTransactionId',
        'posting_date' => 'getPostingDate',
        'transaction_code' => 'getTransactionCode',
        'transaction_amount' => 'getTransactionAmount',
        'commission_rate' => 'getCommissionRate',
        'commission' => 'getCommission',
        'amount_due_agency' => 'getAmountDueAgency',
        'amount_due_creditor' => 'getAmountDueCreditor'
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
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['agency_transaction_id'] = isset($data['agency_transaction_id']) ? $data['agency_transaction_id'] : null;
        $this->container['creditor_transaction_id'] = isset($data['creditor_transaction_id']) ? $data['creditor_transaction_id'] : null;
        $this->container['posting_date'] = isset($data['posting_date']) ? $data['posting_date'] : null;
        $this->container['transaction_code'] = isset($data['transaction_code']) ? $data['transaction_code'] : null;
        $this->container['transaction_amount'] = isset($data['transaction_amount']) ? $data['transaction_amount'] : null;
        $this->container['commission_rate'] = isset($data['commission_rate']) ? $data['commission_rate'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['amount_due_agency'] = isset($data['amount_due_agency']) ? $data['amount_due_agency'] : null;
        $this->container['amount_due_creditor'] = isset($data['amount_due_creditor']) ? $data['amount_due_creditor'] : null;
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
     * @param int|null $con_cap_pro_account_id Gets or sets the con cap pro account id.
     *
     * @return $this
     */
    public function setConCapProAccountId($con_cap_pro_account_id)
    {
        $this->container['con_cap_pro_account_id'] = $con_cap_pro_account_id;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string|null $invoice_id Gets or sets the invoice id.
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

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
     * Gets agency_transaction_id
     *
     * @return string|null
     */
    public function getAgencyTransactionId()
    {
        return $this->container['agency_transaction_id'];
    }

    /**
     * Sets agency_transaction_id
     *
     * @param string|null $agency_transaction_id Gets or sets the agency transaction id.
     *
     * @return $this
     */
    public function setAgencyTransactionId($agency_transaction_id)
    {
        $this->container['agency_transaction_id'] = $agency_transaction_id;

        return $this;
    }

    /**
     * Gets creditor_transaction_id
     *
     * @return string|null
     */
    public function getCreditorTransactionId()
    {
        return $this->container['creditor_transaction_id'];
    }

    /**
     * Sets creditor_transaction_id
     *
     * @param string|null $creditor_transaction_id Gets or sets the creditor transaction id.
     *
     * @return $this
     */
    public function setCreditorTransactionId($creditor_transaction_id)
    {
        $this->container['creditor_transaction_id'] = $creditor_transaction_id;

        return $this;
    }

    /**
     * Gets posting_date
     *
     * @return \DateTime|null
     */
    public function getPostingDate()
    {
        return $this->container['posting_date'];
    }

    /**
     * Sets posting_date
     *
     * @param \DateTime|null $posting_date Gets or sets the posting date.
     *
     * @return $this
     */
    public function setPostingDate($posting_date)
    {
        $this->container['posting_date'] = $posting_date;

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
     * Gets commission_rate
     *
     * @return double|null
     */
    public function getCommissionRate()
    {
        return $this->container['commission_rate'];
    }

    /**
     * Sets commission_rate
     *
     * @param double|null $commission_rate Gets or sets the commission rate.
     *
     * @return $this
     */
    public function setCommissionRate($commission_rate)
    {
        $this->container['commission_rate'] = $commission_rate;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return double|null
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param double|null $commission Gets or sets the commission.
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets amount_due_agency
     *
     * @return double|null
     */
    public function getAmountDueAgency()
    {
        return $this->container['amount_due_agency'];
    }

    /**
     * Sets amount_due_agency
     *
     * @param double|null $amount_due_agency Gets or sets the amount due agency.
     *
     * @return $this
     */
    public function setAmountDueAgency($amount_due_agency)
    {
        $this->container['amount_due_agency'] = $amount_due_agency;

        return $this;
    }

    /**
     * Gets amount_due_creditor
     *
     * @return double|null
     */
    public function getAmountDueCreditor()
    {
        return $this->container['amount_due_creditor'];
    }

    /**
     * Sets amount_due_creditor
     *
     * @param double|null $amount_due_creditor Gets or sets the amount due creditor.
     *
     * @return $this
     */
    public function setAmountDueCreditor($amount_due_creditor)
    {
        $this->container['amount_due_creditor'] = $amount_due_creditor;

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


