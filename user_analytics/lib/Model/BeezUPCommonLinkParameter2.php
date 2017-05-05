<?php
/**
 * BeezUPCommonLinkParameter2
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Channel Catalogs
 *
 * This api allows you to manage your channel catalogs.   A channel catalog is an association between your store and a channel.  You will be able to: - map your catalog colums to channel columns. - map your catalog categories to the channel categories and define a cost of this category - configure the general and cost settings of the channel - enable or disable a channel - exclude products using filters for a channel - override product values for a channel - disable or reenable a product on a channel
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
 * BeezUPCommonLinkParameter2 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BeezUPCommonLinkParameter2 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BeezUP.Common.LinkParameter2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'value' => 'string',
        'required' => 'bool',
        'in' => 'string',
        'type' => 'string',
        'lov_link' => '\Swagger\Client\Model\BeezUPCommonLOVLink2',
        'lov_required' => 'bool'
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
        'name' => 'name',
        'value' => 'value',
        'required' => 'required',
        'in' => 'in',
        'type' => 'type',
        'lov_link' => 'lovLink',
        'lov_required' => 'lovRequired'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'value' => 'setValue',
        'required' => 'setRequired',
        'in' => 'setIn',
        'type' => 'setType',
        'lov_link' => 'setLovLink',
        'lov_required' => 'setLovRequired'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'value' => 'getValue',
        'required' => 'getRequired',
        'in' => 'getIn',
        'type' => 'getType',
        'lov_link' => 'getLovLink',
        'lov_required' => 'getLovRequired'
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

    const IN_PATH = 'path';
    const IN_HEADER = 'header';
    const IN_QUERY = 'query';
    const IN_BODY = 'body';
    const TYPE_STRING = 'string';
    const TYPE_INTEGER = 'integer';
    const TYPE_NUMBER = 'number';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_OBJECT = 'object';
    const TYPE_ARRAY = 'array';
    const TYPE_DATE = 'date';
    const TYPE_DATE_TIME = 'date-time';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getInAllowableValues()
    {
        return [
            self::IN_PATH,
            self::IN_HEADER,
            self::IN_QUERY,
            self::IN_BODY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_INTEGER,
            self::TYPE_NUMBER,
            self::TYPE_BOOLEAN,
            self::TYPE_OBJECT,
            self::TYPE_ARRAY,
            self::TYPE_DATE,
            self::TYPE_DATE_TIME,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['in'] = isset($data['in']) ? $data['in'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lov_link'] = isset($data['lov_link']) ? $data['lov_link'] : null;
        $this->container['lov_required'] = isset($data['lov_required']) ? $data['lov_required'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        $allowed_values = ["path", "header", "query", "body"];
        if (!in_array($this->container['in'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'in', must be one of 'path', 'header', 'query', 'body'.";
        }

        $allowed_values = ["string", "integer", "number", "boolean", "object", "array", "date", "date-time"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'string', 'integer', 'number', 'boolean', 'object', 'array', 'date', 'date-time'.";
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

        if ($this->container['name'] === null) {
            return false;
        }
        $allowed_values = ["path", "header", "query", "body"];
        if (!in_array($this->container['in'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["string", "integer", "number", "boolean", "object", "array", "date", "date-time"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the parameter
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The value of the parameter
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets in
     * @return string
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     * @param string $in * path: if the parameter must be pass in the path uri * header: if the parameter must be passed in http header * query: if the parameter must be passed in querystring * body: if the paramter must be passed in the body
     * @return $this
     */
    public function setIn($in)
    {
        $allowed_values = array('path', 'header', 'query', 'body');
        if (!is_null($in) && (!in_array($in, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'in', must be one of 'path', 'header', 'query', 'body'");
        }
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The value type of the parameter
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('string', 'integer', 'number', 'boolean', 'object', 'array', 'date', 'date-time');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'string', 'integer', 'number', 'boolean', 'object', 'array', 'date', 'date-time'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets lov_link
     * @return \Swagger\Client\Model\BeezUPCommonLOVLink2
     */
    public function getLovLink()
    {
        return $this->container['lov_link'];
    }

    /**
     * Sets lov_link
     * @param \Swagger\Client\Model\BeezUPCommonLOVLink2 $lov_link This parameter expect the values indicated in this list of values.
     * @return $this
     */
    public function setLovLink($lov_link)
    {
        $this->container['lov_link'] = $lov_link;

        return $this;
    }

    /**
     * Gets lov_required
     * @return bool
     */
    public function getLovRequired()
    {
        return $this->container['lov_required'];
    }

    /**
     * Sets lov_required
     * @param bool $lov_required If true, you MUST use indicate a value from the list of values otherwise it's a freetext
     * @return $this
     */
    public function setLovRequired($lov_required)
    {
        $this->container['lov_required'] = $lov_required;

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


