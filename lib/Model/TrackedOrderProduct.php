<?php
/**
 * TrackedOrderProduct
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
 * TrackedOrderProduct Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackedOrderProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'trackedOrderProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'string',
        'product_sku' => 'string',
        'product_title' => 'string',
        'product_image_url' => 'string',
        'product_exists' => 'bool',
        'unit_price' => 'float',
        'quantity' => 'float',
        'margin' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => 'guid',
        'product_sku' => null,
        'product_title' => null,
        'product_image_url' => 'uri',
        'product_exists' => null,
        'unit_price' => null,
        'quantity' => null,
        'margin' => null
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
        'product_id' => 'productId',
        'product_sku' => 'productSku',
        'product_title' => 'productTitle',
        'product_image_url' => 'productImageUrl',
        'product_exists' => 'productExists',
        'unit_price' => 'unitPrice',
        'quantity' => 'quantity',
        'margin' => 'margin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_sku' => 'setProductSku',
        'product_title' => 'setProductTitle',
        'product_image_url' => 'setProductImageUrl',
        'product_exists' => 'setProductExists',
        'unit_price' => 'setUnitPrice',
        'quantity' => 'setQuantity',
        'margin' => 'setMargin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_sku' => 'getProductSku',
        'product_title' => 'getProductTitle',
        'product_image_url' => 'getProductImageUrl',
        'product_exists' => 'getProductExists',
        'unit_price' => 'getUnitPrice',
        'quantity' => 'getQuantity',
        'margin' => 'getMargin'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_sku'] = isset($data['product_sku']) ? $data['product_sku'] : null;
        $this->container['product_title'] = isset($data['product_title']) ? $data['product_title'] : null;
        $this->container['product_image_url'] = isset($data['product_image_url']) ? $data['product_image_url'] : null;
        $this->container['product_exists'] = isset($data['product_exists']) ? $data['product_exists'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_sku'] === null) {
            $invalidProperties[] = "'product_sku' can't be null";
        }
        if ($this->container['product_title'] === null) {
            $invalidProperties[] = "'product_title' can't be null";
        }
        if ($this->container['product_exists'] === null) {
            $invalidProperties[] = "'product_exists' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['margin'] === null) {
            $invalidProperties[] = "'margin' can't be null";
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

        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['product_sku'] === null) {
            return false;
        }
        if ($this->container['product_title'] === null) {
            return false;
        }
        if ($this->container['product_exists'] === null) {
            return false;
        }
        if ($this->container['unit_price'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['margin'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id The product identifier
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_sku
     *
     * @return string
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     *
     * @param string $product_sku The product SKU
     *
     * @return $this
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets product_title
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     *
     * @param string $product_title The product tile
     *
     * @return $this
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets product_image_url
     *
     * @return string
     */
    public function getProductImageUrl()
    {
        return $this->container['product_image_url'];
    }

    /**
     * Sets product_image_url
     *
     * @param string $product_image_url The product image Url
     *
     * @return $this
     */
    public function setProductImageUrl($product_image_url)
    {
        $this->container['product_image_url'] = $product_image_url;

        return $this;
    }

    /**
     * Gets product_exists
     *
     * @return bool
     */
    public function getProductExists()
    {
        return $this->container['product_exists'];
    }

    /**
     * Sets product_exists
     *
     * @param bool $product_exists Indicates if the product still exists in your catalog
     *
     * @return $this
     */
    public function setProductExists($product_exists)
    {
        $this->container['product_exists'] = $product_exists;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price The product's unit price for the order
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity The quantity of this product for the order
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return float
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param float $margin The product's margin for the order
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

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


