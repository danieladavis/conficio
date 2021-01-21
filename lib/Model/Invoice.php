<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @description The invoice.
 * @package  d2r_connectors\conficio
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_id' => 'string',
        'from' => '\DateTime',
        'to' => '\DateTime',
        'total_paid' => 'double',
        'total_commission' => 'double',
        'total_due_agency' => 'double',
        'total_due_creditor' => 'double',
        'sales_tax1_name' => 'string',
        'sales_tax1_amount' => 'double',
        'sales_tax2_name' => 'string',
        'sales_tax2_amount' => 'double',
        'sales_tax3_name' => 'string',
        'sales_tax3_amount' => 'double',
        'sales_tax_ids' => 'string',
        'payment_to_agency' => 'double',
        'payment_to_creditor' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invoice_id' => null,
        'from' => 'date-time',
        'to' => 'date-time',
        'total_paid' => 'double',
        'total_commission' => 'double',
        'total_due_agency' => 'double',
        'total_due_creditor' => 'double',
        'sales_tax1_name' => null,
        'sales_tax1_amount' => 'double',
        'sales_tax2_name' => null,
        'sales_tax2_amount' => 'double',
        'sales_tax3_name' => null,
        'sales_tax3_amount' => 'double',
        'sales_tax_ids' => null,
        'payment_to_agency' => 'double',
        'payment_to_creditor' => 'double'
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
        'invoice_id' => 'InvoiceId',
        'from' => 'From',
        'to' => 'To',
        'total_paid' => 'TotalPaid',
        'total_commission' => 'TotalCommission',
        'total_due_agency' => 'TotalDueAgency',
        'total_due_creditor' => 'TotalDueCreditor',
        'sales_tax1_name' => 'SalesTax1Name',
        'sales_tax1_amount' => 'SalesTax1Amount',
        'sales_tax2_name' => 'SalesTax2Name',
        'sales_tax2_amount' => 'SalesTax2Amount',
        'sales_tax3_name' => 'SalesTax3Name',
        'sales_tax3_amount' => 'SalesTax3Amount',
        'sales_tax_ids' => 'SalesTaxIds',
        'payment_to_agency' => 'PaymentToAgency',
        'payment_to_creditor' => 'PaymentToCreditor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'from' => 'setFrom',
        'to' => 'setTo',
        'total_paid' => 'setTotalPaid',
        'total_commission' => 'setTotalCommission',
        'total_due_agency' => 'setTotalDueAgency',
        'total_due_creditor' => 'setTotalDueCreditor',
        'sales_tax1_name' => 'setSalesTax1Name',
        'sales_tax1_amount' => 'setSalesTax1Amount',
        'sales_tax2_name' => 'setSalesTax2Name',
        'sales_tax2_amount' => 'setSalesTax2Amount',
        'sales_tax3_name' => 'setSalesTax3Name',
        'sales_tax3_amount' => 'setSalesTax3Amount',
        'sales_tax_ids' => 'setSalesTaxIds',
        'payment_to_agency' => 'setPaymentToAgency',
        'payment_to_creditor' => 'setPaymentToCreditor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'from' => 'getFrom',
        'to' => 'getTo',
        'total_paid' => 'getTotalPaid',
        'total_commission' => 'getTotalCommission',
        'total_due_agency' => 'getTotalDueAgency',
        'total_due_creditor' => 'getTotalDueCreditor',
        'sales_tax1_name' => 'getSalesTax1Name',
        'sales_tax1_amount' => 'getSalesTax1Amount',
        'sales_tax2_name' => 'getSalesTax2Name',
        'sales_tax2_amount' => 'getSalesTax2Amount',
        'sales_tax3_name' => 'getSalesTax3Name',
        'sales_tax3_amount' => 'getSalesTax3Amount',
        'sales_tax_ids' => 'getSalesTaxIds',
        'payment_to_agency' => 'getPaymentToAgency',
        'payment_to_creditor' => 'getPaymentToCreditor'
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
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['total_paid'] = isset($data['total_paid']) ? $data['total_paid'] : null;
        $this->container['total_commission'] = isset($data['total_commission']) ? $data['total_commission'] : null;
        $this->container['total_due_agency'] = isset($data['total_due_agency']) ? $data['total_due_agency'] : null;
        $this->container['total_due_creditor'] = isset($data['total_due_creditor']) ? $data['total_due_creditor'] : null;
        $this->container['sales_tax1_name'] = isset($data['sales_tax1_name']) ? $data['sales_tax1_name'] : null;
        $this->container['sales_tax1_amount'] = isset($data['sales_tax1_amount']) ? $data['sales_tax1_amount'] : null;
        $this->container['sales_tax2_name'] = isset($data['sales_tax2_name']) ? $data['sales_tax2_name'] : null;
        $this->container['sales_tax2_amount'] = isset($data['sales_tax2_amount']) ? $data['sales_tax2_amount'] : null;
        $this->container['sales_tax3_name'] = isset($data['sales_tax3_name']) ? $data['sales_tax3_name'] : null;
        $this->container['sales_tax3_amount'] = isset($data['sales_tax3_amount']) ? $data['sales_tax3_amount'] : null;
        $this->container['sales_tax_ids'] = isset($data['sales_tax_ids']) ? $data['sales_tax_ids'] : null;
        $this->container['payment_to_agency'] = isset($data['payment_to_agency']) ? $data['payment_to_agency'] : null;
        $this->container['payment_to_creditor'] = isset($data['payment_to_creditor']) ? $data['payment_to_creditor'] : null;
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
     * @param string|null $invoice_id Gets or sets the invoice number.
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \DateTime|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime|null $from Gets or sets the from.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \DateTime|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \DateTime|null $to Gets or sets the to.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets total_paid
     *
     * @return double|null
     */
    public function getTotalPaid()
    {
        return $this->container['total_paid'];
    }

    /**
     * Sets total_paid
     *
     * @param double|null $total_paid Gets or sets the total paid.
     *
     * @return $this
     */
    public function setTotalPaid($total_paid)
    {
        $this->container['total_paid'] = $total_paid;

        return $this;
    }

    /**
     * Gets total_commission
     *
     * @return double|null
     */
    public function getTotalCommission()
    {
        return $this->container['total_commission'];
    }

    /**
     * Sets total_commission
     *
     * @param double|null $total_commission Gets or sets the total commission.
     *
     * @return $this
     */
    public function setTotalCommission($total_commission)
    {
        $this->container['total_commission'] = $total_commission;

        return $this;
    }

    /**
     * Gets total_due_agency
     *
     * @return double|null
     */
    public function getTotalDueAgency()
    {
        return $this->container['total_due_agency'];
    }

    /**
     * Sets total_due_agency
     *
     * @param double|null $total_due_agency Gets or sets the total due agency.
     *
     * @return $this
     */
    public function setTotalDueAgency($total_due_agency)
    {
        $this->container['total_due_agency'] = $total_due_agency;

        return $this;
    }

    /**
     * Gets total_due_creditor
     *
     * @return double|null
     */
    public function getTotalDueCreditor()
    {
        return $this->container['total_due_creditor'];
    }

    /**
     * Sets total_due_creditor
     *
     * @param double|null $total_due_creditor Gets or sets the total due creditor.
     *
     * @return $this
     */
    public function setTotalDueCreditor($total_due_creditor)
    {
        $this->container['total_due_creditor'] = $total_due_creditor;

        return $this;
    }

    /**
     * Gets sales_tax1_name
     *
     * @return string|null
     */
    public function getSalesTax1Name()
    {
        return $this->container['sales_tax1_name'];
    }

    /**
     * Sets sales_tax1_name
     *
     * @param string|null $sales_tax1_name Gets or sets the sales tax 1 name.
     *
     * @return $this
     */
    public function setSalesTax1Name($sales_tax1_name)
    {
        $this->container['sales_tax1_name'] = $sales_tax1_name;

        return $this;
    }

    /**
     * Gets sales_tax1_amount
     *
     * @return double|null
     */
    public function getSalesTax1Amount()
    {
        return $this->container['sales_tax1_amount'];
    }

    /**
     * Sets sales_tax1_amount
     *
     * @param double|null $sales_tax1_amount Gets or sets the sales tax 1 amount.
     *
     * @return $this
     */
    public function setSalesTax1Amount($sales_tax1_amount)
    {
        $this->container['sales_tax1_amount'] = $sales_tax1_amount;

        return $this;
    }

    /**
     * Gets sales_tax2_name
     *
     * @return string|null
     */
    public function getSalesTax2Name()
    {
        return $this->container['sales_tax2_name'];
    }

    /**
     * Sets sales_tax2_name
     *
     * @param string|null $sales_tax2_name Gets or sets the sales tax 2 name.
     *
     * @return $this
     */
    public function setSalesTax2Name($sales_tax2_name)
    {
        $this->container['sales_tax2_name'] = $sales_tax2_name;

        return $this;
    }

    /**
     * Gets sales_tax2_amount
     *
     * @return double|null
     */
    public function getSalesTax2Amount()
    {
        return $this->container['sales_tax2_amount'];
    }

    /**
     * Sets sales_tax2_amount
     *
     * @param double|null $sales_tax2_amount Gets or sets the sales tax 2 amount.
     *
     * @return $this
     */
    public function setSalesTax2Amount($sales_tax2_amount)
    {
        $this->container['sales_tax2_amount'] = $sales_tax2_amount;

        return $this;
    }

    /**
     * Gets sales_tax3_name
     *
     * @return string|null
     */
    public function getSalesTax3Name()
    {
        return $this->container['sales_tax3_name'];
    }

    /**
     * Sets sales_tax3_name
     *
     * @param string|null $sales_tax3_name Gets or sets the sales tax 3 name.
     *
     * @return $this
     */
    public function setSalesTax3Name($sales_tax3_name)
    {
        $this->container['sales_tax3_name'] = $sales_tax3_name;

        return $this;
    }

    /**
     * Gets sales_tax3_amount
     *
     * @return double|null
     */
    public function getSalesTax3Amount()
    {
        return $this->container['sales_tax3_amount'];
    }

    /**
     * Sets sales_tax3_amount
     *
     * @param double|null $sales_tax3_amount Gets or sets the sales tax 3 amount.
     *
     * @return $this
     */
    public function setSalesTax3Amount($sales_tax3_amount)
    {
        $this->container['sales_tax3_amount'] = $sales_tax3_amount;

        return $this;
    }

    /**
     * Gets sales_tax_ids
     *
     * @return string|null
     */
    public function getSalesTaxIds()
    {
        return $this->container['sales_tax_ids'];
    }

    /**
     * Sets sales_tax_ids
     *
     * @param string|null $sales_tax_ids Gets or sets the sales tax ids.
     *
     * @return $this
     */
    public function setSalesTaxIds($sales_tax_ids)
    {
        $this->container['sales_tax_ids'] = $sales_tax_ids;

        return $this;
    }

    /**
     * Gets payment_to_agency
     *
     * @return double|null
     */
    public function getPaymentToAgency()
    {
        return $this->container['payment_to_agency'];
    }

    /**
     * Sets payment_to_agency
     *
     * @param double|null $payment_to_agency Gets or sets the payment to agency.
     *
     * @return $this
     */
    public function setPaymentToAgency($payment_to_agency)
    {
        $this->container['payment_to_agency'] = $payment_to_agency;

        return $this;
    }

    /**
     * Gets payment_to_creditor
     *
     * @return double|null
     */
    public function getPaymentToCreditor()
    {
        return $this->container['payment_to_creditor'];
    }

    /**
     * Sets payment_to_creditor
     *
     * @param double|null $payment_to_creditor Gets or sets the payment to creditor.
     *
     * @return $this
     */
    public function setPaymentToCreditor($payment_to_creditor)
    {
        $this->container['payment_to_creditor'] = $payment_to_creditor;

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


