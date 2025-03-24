<?php

/**
 * SortRequest
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
 * Reviews Acceleration
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reviews;

use Walmart\Models\BaseModel;

/**
 * SortRequest Class Doc Comment
 *
 * @category Class

 * @description Sort request.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class SortRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SortRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'field' => 'string',
        'order' => 'string',
        'priority' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'field' => null,
        'order' => null,
        'priority' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'field' => false,
        'order' => false,
        'priority' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'field' => 'field',
        'order' => 'order',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'field' => 'setField',
        'order' => 'setOrder',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'field' => 'getField',
        'order' => 'getOrder',
        'priority' => 'getPriority'
    ];


    public const FIELD_ITEM_PRIORITY = 'ITEM_PRIORITY';

    public const FIELD_PRICE = 'PRICE';

    public const ORDER_ASC = 'ASC';

    public const ORDER_DESC = 'DESC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldAllowableValues()
    {
        return [
            self::FIELD_ITEM_PRIORITY,
            self::FIELD_PRICE,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
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
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFieldAllowableValues();
        if (!is_null($this->container['field']) && !in_array($this->container['field'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'field', must be one of '%s'",
                $this->container['field'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order', must be one of '%s'",
                $this->container['order'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets field
     *
     * @return string|null
    
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string|null $field | Attribute | Description | Data Type | | --- | ----------- | ------- | | ITEM_PRIORITY | Recommended priority of the item by Walmart. | integer | | PRICE | Item price | integer |
     *
     * @return self
    
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }
        $allowedValues = $this->getFieldAllowableValues();
        if (!in_array($field, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'field', must be one of '%s'",
                    $field,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['field'] = $field;
        return $this;
    }

    /**
     * Gets order
     *
     * @return string|null
    
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string|null $order order
     *
     * @return self
    
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order', must be one of '%s'",
                    $order,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['order'] = $order;
        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
    
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority Sort priority of the specified field.
     *
     * @return self
    
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }

        $this->container['priority'] = $priority;
        return $this;
    }
}
