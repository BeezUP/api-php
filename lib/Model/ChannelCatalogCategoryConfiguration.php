<?php
/**
 * ChannelCatalogCategoryConfiguration
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
 * ChannelCatalogCategoryConfiguration Class Doc Comment
 *
 * @category Class
 * @description Represent a mapping between a catalog category path and a channel category path. The cost on this mapping can be applied.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalogCategoryConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalogCategoryConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_map_new_sub_categories' => 'bool',
        'catalog_category_path' => '\Swagger\Client\Model\BeezUPCommonCatalogCategoryPath',
        'channel_category_path' => '\Swagger\Client\Model\BeezUPCommonChannelCategoryPath',
        'cost_value' => '\Swagger\Client\Model\ChannelCatalogCategoryCostValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_map_new_sub_categories' => null,
        'catalog_category_path' => null,
        'channel_category_path' => null,
        'cost_value' => null
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
        'auto_map_new_sub_categories' => 'autoMapNewSubCategories',
        'catalog_category_path' => 'catalogCategoryPath',
        'channel_category_path' => 'channelCategoryPath',
        'cost_value' => 'costValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_map_new_sub_categories' => 'setAutoMapNewSubCategories',
        'catalog_category_path' => 'setCatalogCategoryPath',
        'channel_category_path' => 'setChannelCategoryPath',
        'cost_value' => 'setCostValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_map_new_sub_categories' => 'getAutoMapNewSubCategories',
        'catalog_category_path' => 'getCatalogCategoryPath',
        'channel_category_path' => 'getChannelCategoryPath',
        'cost_value' => 'getCostValue'
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
        $this->container['auto_map_new_sub_categories'] = isset($data['auto_map_new_sub_categories']) ? $data['auto_map_new_sub_categories'] : null;
        $this->container['catalog_category_path'] = isset($data['catalog_category_path']) ? $data['catalog_category_path'] : null;
        $this->container['channel_category_path'] = isset($data['channel_category_path']) ? $data['channel_category_path'] : null;
        $this->container['cost_value'] = isset($data['cost_value']) ? $data['cost_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['auto_map_new_sub_categories'] === null) {
            $invalidProperties[] = "'auto_map_new_sub_categories' can't be null";
        }
        if ($this->container['catalog_category_path'] === null) {
            $invalidProperties[] = "'catalog_category_path' can't be null";
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

        if ($this->container['auto_map_new_sub_categories'] === null) {
            return false;
        }
        if ($this->container['catalog_category_path'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets auto_map_new_sub_categories
     *
     * @return bool
     */
    public function getAutoMapNewSubCategories()
    {
        return $this->container['auto_map_new_sub_categories'];
    }

    /**
     * Sets auto_map_new_sub_categories
     *
     * @param bool $auto_map_new_sub_categories Great feature! In case of mapping to parent catalog category, you can ask to automatically map new sub catalog category in the next importation to this channel category path.
     *
     * @return $this
     */
    public function setAutoMapNewSubCategories($auto_map_new_sub_categories)
    {
        $this->container['auto_map_new_sub_categories'] = $auto_map_new_sub_categories;

        return $this;
    }

    /**
     * Gets catalog_category_path
     *
     * @return \Swagger\Client\Model\BeezUPCommonCatalogCategoryPath
     */
    public function getCatalogCategoryPath()
    {
        return $this->container['catalog_category_path'];
    }

    /**
     * Sets catalog_category_path
     *
     * @param \Swagger\Client\Model\BeezUPCommonCatalogCategoryPath $catalog_category_path catalog_category_path
     *
     * @return $this
     */
    public function setCatalogCategoryPath($catalog_category_path)
    {
        $this->container['catalog_category_path'] = $catalog_category_path;

        return $this;
    }

    /**
     * Gets channel_category_path
     *
     * @return \Swagger\Client\Model\BeezUPCommonChannelCategoryPath
     */
    public function getChannelCategoryPath()
    {
        return $this->container['channel_category_path'];
    }

    /**
     * Sets channel_category_path
     *
     * @param \Swagger\Client\Model\BeezUPCommonChannelCategoryPath $channel_category_path channel_category_path
     *
     * @return $this
     */
    public function setChannelCategoryPath($channel_category_path)
    {
        $this->container['channel_category_path'] = $channel_category_path;

        return $this;
    }

    /**
     * Gets cost_value
     *
     * @return \Swagger\Client\Model\ChannelCatalogCategoryCostValue
     */
    public function getCostValue()
    {
        return $this->container['cost_value'];
    }

    /**
     * Sets cost_value
     *
     * @param \Swagger\Client\Model\ChannelCatalogCategoryCostValue $cost_value cost_value
     *
     * @return $this
     */
    public function setCostValue($cost_value)
    {
        $this->container['cost_value'] = $cost_value;

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


