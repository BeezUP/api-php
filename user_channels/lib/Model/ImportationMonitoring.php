<?php
/**
 * ImportationMonitoring
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalogs
 *
 * This API allows you to manage your catalogs
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
 * ImportationMonitoring Class Doc Comment
 *
 * @category    Class
 * @description Describe the reporting of the catalog importation
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ImportationMonitoring implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'importationMonitoring';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => '\Swagger\Client\Model\BeezUPCommonUserId',
        'success' => 'bool',
        'execution_id' => '\Swagger\Client\Model\ExecutionId',
        'last_update_utc_date' => '\DateTime',
        'begin_utc_date' => '\DateTime',
        'errors' => '\Swagger\Client\Model\BeezUPCommonUserErrorMessage[]',
        'steps' => 'map[string,bool]'
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
        'user_id' => 'userId',
        'success' => 'success',
        'execution_id' => 'executionId',
        'last_update_utc_date' => 'lastUpdateUtcDate',
        'begin_utc_date' => 'beginUtcDate',
        'errors' => 'errors',
        'steps' => 'steps'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'success' => 'setSuccess',
        'execution_id' => 'setExecutionId',
        'last_update_utc_date' => 'setLastUpdateUtcDate',
        'begin_utc_date' => 'setBeginUtcDate',
        'errors' => 'setErrors',
        'steps' => 'setSteps'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'success' => 'getSuccess',
        'execution_id' => 'getExecutionId',
        'last_update_utc_date' => 'getLastUpdateUtcDate',
        'begin_utc_date' => 'getBeginUtcDate',
        'errors' => 'getErrors',
        'steps' => 'getSteps'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['execution_id'] = isset($data['execution_id']) ? $data['execution_id'] : null;
        $this->container['last_update_utc_date'] = isset($data['last_update_utc_date']) ? $data['last_update_utc_date'] : null;
        $this->container['begin_utc_date'] = isset($data['begin_utc_date']) ? $data['begin_utc_date'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['success'] === null) {
            $invalid_properties[] = "'success' can't be null";
        }
        if ($this->container['execution_id'] === null) {
            $invalid_properties[] = "'execution_id' can't be null";
        }
        if ($this->container['last_update_utc_date'] === null) {
            $invalid_properties[] = "'last_update_utc_date' can't be null";
        }
        if ($this->container['begin_utc_date'] === null) {
            $invalid_properties[] = "'begin_utc_date' can't be null";
        }
        if ($this->container['steps'] === null) {
            $invalid_properties[] = "'steps' can't be null";
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

        if ($this->container['success'] === null) {
            return false;
        }
        if ($this->container['execution_id'] === null) {
            return false;
        }
        if ($this->container['last_update_utc_date'] === null) {
            return false;
        }
        if ($this->container['begin_utc_date'] === null) {
            return false;
        }
        if ($this->container['steps'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_id
     * @return \Swagger\Client\Model\BeezUPCommonUserId
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param \Swagger\Client\Model\BeezUPCommonUserId $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success Indicates if the importation was successfully completed or not
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets execution_id
     * @return \Swagger\Client\Model\ExecutionId
     */
    public function getExecutionId()
    {
        return $this->container['execution_id'];
    }

    /**
     * Sets execution_id
     * @param \Swagger\Client\Model\ExecutionId $execution_id
     * @return $this
     */
    public function setExecutionId($execution_id)
    {
        $this->container['execution_id'] = $execution_id;

        return $this;
    }

    /**
     * Gets last_update_utc_date
     * @return \DateTime
     */
    public function getLastUpdateUtcDate()
    {
        return $this->container['last_update_utc_date'];
    }

    /**
     * Sets last_update_utc_date
     * @param \DateTime $last_update_utc_date The last update of the reporting
     * @return $this
     */
    public function setLastUpdateUtcDate($last_update_utc_date)
    {
        $this->container['last_update_utc_date'] = $last_update_utc_date;

        return $this;
    }

    /**
     * Gets begin_utc_date
     * @return \DateTime
     */
    public function getBeginUtcDate()
    {
        return $this->container['begin_utc_date'];
    }

    /**
     * Sets begin_utc_date
     * @param \DateTime $begin_utc_date The start date of the importation
     * @return $this
     */
    public function setBeginUtcDate($begin_utc_date)
    {
        $this->container['begin_utc_date'] = $begin_utc_date;

        return $this;
    }

    /**
     * Gets errors
     * @return \Swagger\Client\Model\BeezUPCommonUserErrorMessage[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param \Swagger\Client\Model\BeezUPCommonUserErrorMessage[] $errors In case of error a description will be indicated
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets steps
     * @return map[string,bool]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     * @param map[string,bool] $steps Contains all steps of the importation process with a boolean. If true the step has been passed, false the step is not complete
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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


