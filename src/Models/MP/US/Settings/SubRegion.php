<?php

/**
 * SubRegion
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * SubRegion Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class SubRegion extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SubRegion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'subRegionCode' => 'string',
        'subRegionName' => 'string',
        'states' => '\Walmart\Models\MP\US\Settings\State[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'subRegionCode' => null,
        'subRegionName' => null,
        'states' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'subRegionCode' => false,
        'subRegionName' => false,
        'states' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'subRegionCode' => 'subRegionCode',
        'subRegionName' => 'subRegionName',
        'states' => 'states'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'subRegionCode' => 'setSubRegionCode',
        'subRegionName' => 'setSubRegionName',
        'states' => 'setStates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'subRegionCode' => 'getSubRegionCode',
        'subRegionName' => 'getSubRegionName',
        'states' => 'getStates'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('subRegionCode', $data ?? [], null);
        $this->setIfExists('subRegionName', $data ?? [], null);
        $this->setIfExists('states', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subRegionCode'] === null) {
            $invalidProperties[] = "'subRegionCode' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets subRegionCode
     *
     * @return string
    
     */
    public function getSubRegionCode()
    {
        return $this->container['subRegionCode'];
    }

    /**
     * Sets subRegionCode
     *
     * @param string $subRegionCode subRegionCode
     *
     * @return self
    
     */
    public function setSubRegionCode($subRegionCode)
    {
        if (is_null($subRegionCode)) {
            throw new \InvalidArgumentException('non-nullable subRegionCode cannot be null');
        }

        $this->container['subRegionCode'] = $subRegionCode;
        return $this;
    }

    /**
     * Gets subRegionName
     *
     * @return string|null
    
     */
    public function getSubRegionName()
    {
        return $this->container['subRegionName'];
    }

    /**
     * Sets subRegionName
     *
     * @param string|null $subRegionName subRegionName
     *
     * @return self
    
     */
    public function setSubRegionName($subRegionName)
    {
        if (is_null($subRegionName)) {
            throw new \InvalidArgumentException('non-nullable subRegionName cannot be null');
        }

        $this->container['subRegionName'] = $subRegionName;
        return $this;
    }

    /**
     * Gets states
     *
     * @return \Walmart\Models\MP\US\Settings\State[]|null
    
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \Walmart\Models\MP\US\Settings\State[]|null $states states
     *
     * @return self
    
     */
    public function setStates($states)
    {
        if (is_null($states)) {
            throw new \InvalidArgumentException('non-nullable states cannot be null');
        }

        $this->container['states'] = $states;
        return $this;
    }
}
