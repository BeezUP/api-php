<?php
/**
 * CompanyInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Customer
 *
 * This API will gives you the ability to : - manage your account - manage your stores - shares your stores with your friends - manage your contracts - access to your invoices
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CompanyInfo Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'companyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\Swagger\Client\Model\Address',
        'postal_code' => '\Swagger\Client\Model\PostalCode',
        'city' => '\Swagger\Client\Model\City',
        'country_iso_code_alpha3' => '\Swagger\Client\Model\BeezUPCommonCountryIsoCodeAlpha3',
        'company' => '\Swagger\Client\Model\Company',
        'vat_number' => '\Swagger\Client\Model\VatNumber',
        'accounting_emails' => '\Swagger\Client\Model\AccountingEmails'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'address' => 'address',
        'postal_code' => 'postalCode',
        'city' => 'city',
        'country_iso_code_alpha3' => 'countryIsoCodeAlpha3',
        'company' => 'company',
        'vat_number' => 'vatNumber',
        'accounting_emails' => 'accountingEmails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'country_iso_code_alpha3' => 'setCountryIsoCodeAlpha3',
        'company' => 'setCompany',
        'vat_number' => 'setVatNumber',
        'accounting_emails' => 'setAccountingEmails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'country_iso_code_alpha3' => 'getCountryIsoCodeAlpha3',
        'company' => 'getCompany',
        'vat_number' => 'getVatNumber',
        'accounting_emails' => 'getAccountingEmails'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_iso_code_alpha3'] = isset($data['country_iso_code_alpha3']) ? $data['country_iso_code_alpha3'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['accounting_emails'] = isset($data['accounting_emails']) ? $data['accounting_emails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['address'] === null) {
            $invalid_properties[] = "'address' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalid_properties[] = "'postal_code' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            $invalid_properties[] = "'country_iso_code_alpha3' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalid_properties[] = "'company' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['address'] === null) {
            return false;
        }
        if ($this->container['postal_code'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            return false;
        }
        if ($this->container['company'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets address
     * @return \Swagger\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Swagger\Client\Model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets postal_code
     * @return \Swagger\Client\Model\PostalCode
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param \Swagger\Client\Model\PostalCode $postal_code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     * @return \Swagger\Client\Model\City
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param \Swagger\Client\Model\City $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_iso_code_alpha3
     * @return \Swagger\Client\Model\BeezUPCommonCountryIsoCodeAlpha3
     */
    public function getCountryIsoCodeAlpha3()
    {
        return $this->container['country_iso_code_alpha3'];
    }

    /**
     * Sets country_iso_code_alpha3
     * @param \Swagger\Client\Model\BeezUPCommonCountryIsoCodeAlpha3 $country_iso_code_alpha3
     * @return $this
     */
    public function setCountryIsoCodeAlpha3($country_iso_code_alpha3)
    {
        $this->container['country_iso_code_alpha3'] = $country_iso_code_alpha3;

        return $this;
    }

    /**
     * Gets company
     * @return \Swagger\Client\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Swagger\Client\Model\Company $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets vat_number
     * @return \Swagger\Client\Model\VatNumber
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     * @param \Swagger\Client\Model\VatNumber $vat_number
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets accounting_emails
     * @return \Swagger\Client\Model\AccountingEmails
     */
    public function getAccountingEmails()
    {
        return $this->container['accounting_emails'];
    }

    /**
     * Sets accounting_emails
     * @param \Swagger\Client\Model\AccountingEmails $accounting_emails
     * @return $this
     */
    public function setAccountingEmails($accounting_emails)
    {
        $this->container['accounting_emails'] = $accounting_emails;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

