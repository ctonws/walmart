<?php

/**
 * EnumFilterCriteria
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
 * Assortment Recommendations
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\AssortmentRecommendations;

use Walmart\Models\BaseModel;

/**
 * EnumFilterCriteria Class Doc Comment
 *
 * @category Class

 * @description Filter based on preset parameters and their associated values is possible with EnumFilter.   No parameter should be repeated.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class EnumFilterCriteria extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EnumFilterCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'parameter' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'parameter' => null,
        'values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'parameter' => false,
        'values' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'parameter' => 'parameter',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'parameter' => 'setParameter',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'parameter' => 'getParameter',
        'values' => 'getValues'
    ];


    public const PARAMETER_ITEM_AVAILABILITY_STATUS = 'ITEM_AVAILABILITY_STATUS';

    public const VALUES_EXISTING_IN_WALMART = 'EXISTING_IN_WALMART';

    public const VALUES_NEW_TO_WALMART = 'NEW_TO_WALMART';

    public const VALUES_MOST_SEARCHED_FOR = 'MOST_SEARCHED_FOR';

    public const VALUES_BEST_SELLERS = 'BEST_SELLERS';

    public const VALUES_DEAL_ITEMS = 'DEAL_ITEMS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getParameterAllowableValues()
    {
        return [
            self::PARAMETER_ITEM_AVAILABILITY_STATUS,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValuesAllowableValues()
    {
        return [
            self::VALUES_EXISTING_IN_WALMART,
            self::VALUES_NEW_TO_WALMART,
            self::VALUES_MOST_SEARCHED_FOR,
            self::VALUES_BEST_SELLERS,
            self::VALUES_DEAL_ITEMS,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('parameter', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getParameterAllowableValues();
        if (!is_null($this->container['parameter']) && !in_array($this->container['parameter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'parameter', must be one of '%s'",
                $this->container['parameter'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets parameter
     *
     * @return string|null
    
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param string|null $parameter To apply an enum filter based on the predefined parameter.   | Attribute | Description | Data Type | | --- | ----------- | ------- | | ITEM_AVAILABILITY_STATUS | To filter based on whether the items which are new to Walmart or existing in Walmart. | string | | SHOPPING_TRENDS | Indicates the demand types identified in the market for an item. An item can have more than one value for this parameter. | string |
     *
     * @return self
    
     */
    public function setParameter($parameter)
    {
        if (is_null($parameter)) {
            throw new \InvalidArgumentException('non-nullable parameter cannot be null');
        }
        $allowedValues = $this->getParameterAllowableValues();
        if (!in_array($parameter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'parameter', must be one of '%s'",
                    $parameter,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['parameter'] = $parameter;
        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]|null
    
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values Values correspond to the parameter for applying filter on the response. The data in values[] are predefined. OR operator is used between the values.   | Attribute | Associated parameter of enumFilter | Description | Data Type | | --- | ----------- | ----------- | ------- | | EXISTING_IN_WALMART | ITEM_AVAILABILITY_STATUS | To filters based on the items which are existing in Walmart. | string | | NEW_TO_WALMART | ITEM_AVAILABILITY_STATUS | To filters based on the items which are new to Walmart. | string | | MOST_SEARCHED_FOR | SHOPPING_TRENDS | Item is most searched for in the market. | string | | BEST_SELLERS | SHOPPING_TRENDS | Item is best seller in the market.  | string | | DEAL_ITEMS | SHOPPING_TRENDS | Item is in demand and is a part of deals in the other marketplaces. | string |
     *
     * @return self
    
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $allowedValues = $this->getValuesAllowableValues();
        if (array_diff($values, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'values', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['values'] = $values;
        return $this;
    }
}
