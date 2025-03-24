<?php

/**
 * NameValueAttributes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Models\BaseModel;

/**
 * NameValueAttributes Class Doc Comment
 *
 * @category Class

 * @description Bag of additional attributes

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class NameValueAttributes extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NameValueAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'nameValueAttribute' => '\Walmart\Models\MP\US\Items\NameValueAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'nameValueAttribute' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'nameValueAttribute' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'nameValueAttribute' => 'nameValueAttribute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'nameValueAttribute' => 'setNameValueAttribute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'nameValueAttribute' => 'getNameValueAttribute'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('nameValueAttribute', $data ?? [], null);
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
     * Gets nameValueAttribute
     *
     * @return \Walmart\Models\MP\US\Items\NameValueAttribute[]|null
    
     */
    public function getNameValueAttribute()
    {
        return $this->container['nameValueAttribute'];
    }

    /**
     * Sets nameValueAttribute
     *
     * @param \Walmart\Models\MP\US\Items\NameValueAttribute[]|null $nameValueAttribute nameValueAttribute
     *
     * @return self
    
     */
    public function setNameValueAttribute($nameValueAttribute)
    {
        if (is_null($nameValueAttribute)) {
            throw new \InvalidArgumentException('non-nullable nameValueAttribute cannot be null');
        }

        $this->container['nameValueAttribute'] = $nameValueAttribute;
        return $this;
    }
}
