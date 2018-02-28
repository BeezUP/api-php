<?php
/**
 * ReportByChannelRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BeezUP API
 *
 * # The REST API of BeezUP system ## Overview The REST APIs provide programmatic access to read and write BeezUP data.  Basically, with this API you will be able to do everything like you were with your browser on https://go.beezup.com !  The main features are: - Register and manage your account - Create and manage and share your stores with your friends/co-workers. - Import your product catalog and schedule the auto importation - Search the channels your want to use - Configure your channels for your catalogs to export your product information:     - cost and general settings     - category and columns mappings     - your will be able to create and manage your custom column     - put in place exlusion filters based on simple conditions on your product data     - override product values     - get product vision for a channel catalog scope - Analyze and optimize your performance of your catalogs on all yours channels with different type of reportings by day, channel, category and by product. - Automatize your optimisation by using rules! - And of course... Manage your orders harvested from all your marketplaces:     - Synchronize your orders in an uniformized way     - Get the available actions and update the order status - ...and more!  ## Authentication credentials The public API with the base path **_/v2/public** have been put in place to give you an entry point to our system for the user registration, login and lost password. The public API does not require any credentials. We give you the some public list of values and public channels for our public commercial web site [www.beezup.com](http://www.beezup.com).  The user API with the base path **_/v2/user** requires a token which is available on this page: https://go.beezup.com/Account/MyAccount  ## Things to keep in mind ### API Rate Limits - The BeezUP REST API is limited to 100 calls/minute.  ### Media type The default media type for requests and responses is application/json. Where noted, some operations support other content types. If no additional content type is mentioned for a specific operation, then the media type is application/json.  ### Required content type The required and default encoding for the request and responses is UTF8.  ### Required date time format All our date time are formatted in ISO 8601 format: 2014-06-24T16:25:00Z.  ### Base URL The Base URL of the BeezUP API Order Management REST API conforms to the following template.  https://api.beezup.com  All URLs returned by the BeezUP API are relative to this base URL, and all requests to the REST API must use this base URL template.  You can test our API on https://api-docs.beezup.com/swagger-ui\\ You can contact us on [gitter, #BeezUP/API](https://gitter.im/BeezUP/API)
 *
 * OpenAPI spec version: 2.0
 * Contact: help@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ReportByChannelRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportByChannelRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'reportByChannelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => '\Swagger\Client\Model\BeezUPCommonChannelId',
        'period_type' => '\Swagger\Client\Model\ReportFilterPeriodType',
        'begin_period_utc_date' => '\DateTime',
        'end_period_utc_date' => '\DateTime',
        'category_filter' => '\Swagger\Client\Model\BeezUPCommonCatalogCategoryFilter',
        'performance_indicator_filters' => '\Swagger\Client\Model\PerformanceIndicatorFilter[]',
        'advanced_filters' => '\Swagger\Client\Model\ReportAdvancedFilters',
        'order_by' => '\Swagger\Client\Model\PerformanceIndicatorType',
        'order_by_direction' => '\Swagger\Client\Model\OrderByDirection',
        'page_size' => '\Swagger\Client\Model\BeezUPCommonPageSize',
        'page_number' => '\Swagger\Client\Model\BeezUPCommonPageNumber'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_id' => null,
        'period_type' => null,
        'begin_period_utc_date' => 'date-time',
        'end_period_utc_date' => 'date-time',
        'category_filter' => null,
        'performance_indicator_filters' => null,
        'advanced_filters' => null,
        'order_by' => null,
        'order_by_direction' => null,
        'page_size' => null,
        'page_number' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'channel_id' => 'channelId',
        'period_type' => 'periodType',
        'begin_period_utc_date' => 'beginPeriodUtcDate',
        'end_period_utc_date' => 'endPeriodUtcDate',
        'category_filter' => 'categoryFilter',
        'performance_indicator_filters' => 'performanceIndicatorFilters',
        'advanced_filters' => 'advancedFilters',
        'order_by' => 'orderBy',
        'order_by_direction' => 'orderByDirection',
        'page_size' => 'pageSize',
        'page_number' => 'pageNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'period_type' => 'setPeriodType',
        'begin_period_utc_date' => 'setBeginPeriodUtcDate',
        'end_period_utc_date' => 'setEndPeriodUtcDate',
        'category_filter' => 'setCategoryFilter',
        'performance_indicator_filters' => 'setPerformanceIndicatorFilters',
        'advanced_filters' => 'setAdvancedFilters',
        'order_by' => 'setOrderBy',
        'order_by_direction' => 'setOrderByDirection',
        'page_size' => 'setPageSize',
        'page_number' => 'setPageNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'period_type' => 'getPeriodType',
        'begin_period_utc_date' => 'getBeginPeriodUtcDate',
        'end_period_utc_date' => 'getEndPeriodUtcDate',
        'category_filter' => 'getCategoryFilter',
        'performance_indicator_filters' => 'getPerformanceIndicatorFilters',
        'advanced_filters' => 'getAdvancedFilters',
        'order_by' => 'getOrderBy',
        'order_by_direction' => 'getOrderByDirection',
        'page_size' => 'getPageSize',
        'page_number' => 'getPageNumber'
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
        return self::$swaggerModelName;
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['period_type'] = isset($data['period_type']) ? $data['period_type'] : null;
        $this->container['begin_period_utc_date'] = isset($data['begin_period_utc_date']) ? $data['begin_period_utc_date'] : null;
        $this->container['end_period_utc_date'] = isset($data['end_period_utc_date']) ? $data['end_period_utc_date'] : null;
        $this->container['category_filter'] = isset($data['category_filter']) ? $data['category_filter'] : null;
        $this->container['performance_indicator_filters'] = isset($data['performance_indicator_filters']) ? $data['performance_indicator_filters'] : null;
        $this->container['advanced_filters'] = isset($data['advanced_filters']) ? $data['advanced_filters'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['order_by_direction'] = isset($data['order_by_direction']) ? $data['order_by_direction'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['period_type'] === null) {
            $invalidProperties[] = "'period_type' can't be null";
        }
        if ($this->container['advanced_filters'] === null) {
            $invalidProperties[] = "'advanced_filters' can't be null";
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

        if ($this->container['period_type'] === null) {
            return false;
        }
        if ($this->container['advanced_filters'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     *
     * @return \Swagger\Client\Model\BeezUPCommonChannelId
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param \Swagger\Client\Model\BeezUPCommonChannelId $channel_id channel_id
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets period_type
     *
     * @return \Swagger\Client\Model\ReportFilterPeriodType
     */
    public function getPeriodType()
    {
        return $this->container['period_type'];
    }

    /**
     * Sets period_type
     *
     * @param \Swagger\Client\Model\ReportFilterPeriodType $period_type period_type
     *
     * @return $this
     */
    public function setPeriodType($period_type)
    {
        $this->container['period_type'] = $period_type;

        return $this;
    }

    /**
     * Gets begin_period_utc_date
     *
     * @return \DateTime
     */
    public function getBeginPeriodUtcDate()
    {
        return $this->container['begin_period_utc_date'];
    }

    /**
     * Sets begin_period_utc_date
     *
     * @param \DateTime $begin_period_utc_date The begin date period you want to get the report. It's required only in case of custom period type !
     *
     * @return $this
     */
    public function setBeginPeriodUtcDate($begin_period_utc_date)
    {
        $this->container['begin_period_utc_date'] = $begin_period_utc_date;

        return $this;
    }

    /**
     * Gets end_period_utc_date
     *
     * @return \DateTime
     */
    public function getEndPeriodUtcDate()
    {
        return $this->container['end_period_utc_date'];
    }

    /**
     * Sets end_period_utc_date
     *
     * @param \DateTime $end_period_utc_date The end date period you want to get the report. It's required only in case of custom period type !
     *
     * @return $this
     */
    public function setEndPeriodUtcDate($end_period_utc_date)
    {
        $this->container['end_period_utc_date'] = $end_period_utc_date;

        return $this;
    }

    /**
     * Gets category_filter
     *
     * @return \Swagger\Client\Model\BeezUPCommonCatalogCategoryFilter
     */
    public function getCategoryFilter()
    {
        return $this->container['category_filter'];
    }

    /**
     * Sets category_filter
     *
     * @param \Swagger\Client\Model\BeezUPCommonCatalogCategoryFilter $category_filter category_filter
     *
     * @return $this
     */
    public function setCategoryFilter($category_filter)
    {
        $this->container['category_filter'] = $category_filter;

        return $this;
    }

    /**
     * Gets performance_indicator_filters
     *
     * @return \Swagger\Client\Model\PerformanceIndicatorFilter[]
     */
    public function getPerformanceIndicatorFilters()
    {
        return $this->container['performance_indicator_filters'];
    }

    /**
     * Sets performance_indicator_filters
     *
     * @param \Swagger\Client\Model\PerformanceIndicatorFilter[] $performance_indicator_filters performance_indicator_filters
     *
     * @return $this
     */
    public function setPerformanceIndicatorFilters($performance_indicator_filters)
    {
        $this->container['performance_indicator_filters'] = $performance_indicator_filters;

        return $this;
    }

    /**
     * Gets advanced_filters
     *
     * @return \Swagger\Client\Model\ReportAdvancedFilters
     */
    public function getAdvancedFilters()
    {
        return $this->container['advanced_filters'];
    }

    /**
     * Sets advanced_filters
     *
     * @param \Swagger\Client\Model\ReportAdvancedFilters $advanced_filters advanced_filters
     *
     * @return $this
     */
    public function setAdvancedFilters($advanced_filters)
    {
        $this->container['advanced_filters'] = $advanced_filters;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Swagger\Client\Model\PerformanceIndicatorType
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Swagger\Client\Model\PerformanceIndicatorType $order_by order_by
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets order_by_direction
     *
     * @return \Swagger\Client\Model\OrderByDirection
     */
    public function getOrderByDirection()
    {
        return $this->container['order_by_direction'];
    }

    /**
     * Sets order_by_direction
     *
     * @param \Swagger\Client\Model\OrderByDirection $order_by_direction order_by_direction
     *
     * @return $this
     */
    public function setOrderByDirection($order_by_direction)
    {
        $this->container['order_by_direction'] = $order_by_direction;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return \Swagger\Client\Model\BeezUPCommonPageSize
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param \Swagger\Client\Model\BeezUPCommonPageSize $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return \Swagger\Client\Model\BeezUPCommonPageNumber
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param \Swagger\Client\Model\BeezUPCommonPageNumber $page_number page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


