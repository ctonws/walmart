<?php

/**
 * CustomerOrderItem
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * CustomerOrderItem Class Doc Comment
 *
 * @category Class

 * @description Order items details

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CustomerOrderItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CustomerOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentType' => 'string',
        'sellerLineId' => 'string',
        'itemDetail' => '\Walmart\Models\MP\US\Fulfillment\ItemDetail',
        'qty' => '\Walmart\Models\MP\US\Fulfillment\CustomerOrderItemQuantityType',
        'shippingMethod' => 'string',
        'shippingTo' => '\Walmart\Models\MP\US\Fulfillment\PickupPersonDetails',
        'chargeDetails' => '\Walmart\Models\MP\US\Fulfillment\ChargeDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentType' => null,
        'sellerLineId' => null,
        'itemDetail' => null,
        'qty' => null,
        'shippingMethod' => null,
        'shippingTo' => null,
        'chargeDetails' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentType' => false,
        'sellerLineId' => false,
        'itemDetail' => false,
        'qty' => false,
        'shippingMethod' => false,
        'shippingTo' => false,
        'chargeDetails' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentType' => 'fulfillmentType',
        'sellerLineId' => 'sellerLineId',
        'itemDetail' => 'itemDetail',
        'qty' => 'qty',
        'shippingMethod' => 'shippingMethod',
        'shippingTo' => 'shippingTo',
        'chargeDetails' => 'chargeDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentType' => 'setFulfillmentType',
        'sellerLineId' => 'setSellerLineId',
        'itemDetail' => 'setItemDetail',
        'qty' => 'setQty',
        'shippingMethod' => 'setShippingMethod',
        'shippingTo' => 'setShippingTo',
        'chargeDetails' => 'setChargeDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentType' => 'getFulfillmentType',
        'sellerLineId' => 'getSellerLineId',
        'itemDetail' => 'getItemDetail',
        'qty' => 'getQty',
        'shippingMethod' => 'getShippingMethod',
        'shippingTo' => 'getShippingTo',
        'chargeDetails' => 'getChargeDetails'
    ];


    public const SHIPPING_METHOD_EXPEDITED = 'EXPEDITED';

    public const SHIPPING_METHOD_STANDARD = 'STANDARD';

    public const SHIPPING_METHOD_RUSH = 'RUSH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingMethodAllowableValues()
    {
        return [
            self::SHIPPING_METHOD_EXPEDITED,
            self::SHIPPING_METHOD_STANDARD,
            self::SHIPPING_METHOD_RUSH,
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
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('sellerLineId', $data ?? [], null);
        $this->setIfExists('itemDetail', $data ?? [], null);
        $this->setIfExists('qty', $data ?? [], null);
        $this->setIfExists('shippingMethod', $data ?? [], null);
        $this->setIfExists('shippingTo', $data ?? [], null);
        $this->setIfExists('chargeDetails', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerLineId'] === null) {
            $invalidProperties[] = "'sellerLineId' can't be null";
        }
        if ((mb_strlen($this->container['sellerLineId']) > 6)) {
            $invalidProperties[] = "invalid value for 'sellerLineId', the character length must be smaller than or equal to 6.";
        }


        if ((mb_strlen($this->container['sellerLineId']) < 1)) {
            $invalidProperties[] = "invalid value for 'sellerLineId', the character length must be bigger than or equal to 1.";
        }






        if ($this->container['itemDetail'] === null) {
            $invalidProperties[] = "'itemDetail' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
        }
        $allowedValues = $this->getShippingMethodAllowableValues();
        if (!is_null($this->container['shippingMethod']) && !in_array($this->container['shippingMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shippingMethod', must be one of '%s'",
                $this->container['shippingMethod'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shippingTo'] === null) {
            $invalidProperties[] = "'shippingTo' can't be null";
        }
        if ($this->container['chargeDetails'] === null) {
            $invalidProperties[] = "'chargeDetails' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets fulfillmentType
     *
     * @return string|null
    
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param string|null $fulfillmentType Fulfillment Type of an order. Currently supported type: 'DELIVERY'
     *
     * @return self
    
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }

        $this->container['fulfillmentType'] = $fulfillmentType;
        return $this;
    }

    /**
     * Gets sellerLineId
     *
     * @return string
    
     */
    public function getSellerLineId()
    {
        return $this->container['sellerLineId'];
    }

    /**
     * Sets sellerLineId
     *
     * @param string $sellerLineId Unique Id for each line item, preferred sequence 1,2,3...
     *
     * @return self
    
     */
    public function setSellerLineId($sellerLineId)
    {
        if (is_null($sellerLineId)) {
            throw new \InvalidArgumentException('non-nullable sellerLineId cannot be null');
        }
        if ((mb_strlen($sellerLineId) > 6)) {
            throw new \InvalidArgumentException('invalid length for $sellerLineId when calling CustomerOrderItem., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($sellerLineId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sellerLineId when calling CustomerOrderItem., must be bigger than or equal to 1.');
        }






        $this->container['sellerLineId'] = $sellerLineId;
        return $this;
    }

    /**
     * Gets itemDetail
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ItemDetail
    
     */
    public function getItemDetail()
    {
        return $this->container['itemDetail'];
    }

    /**
     * Sets itemDetail
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ItemDetail $itemDetail itemDetail
     *
     * @return self
    
     */
    public function setItemDetail($itemDetail)
    {
        if (is_null($itemDetail)) {
            throw new \InvalidArgumentException('non-nullable itemDetail cannot be null');
        }

        $this->container['itemDetail'] = $itemDetail;
        return $this;
    }

    /**
     * Gets qty
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CustomerOrderItemQuantityType
    
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CustomerOrderItemQuantityType $qty qty
     *
     * @return self
    
     */
    public function setQty($qty)
    {
        if (is_null($qty)) {
            throw new \InvalidArgumentException('non-nullable qty cannot be null');
        }

        $this->container['qty'] = $qty;
        return $this;
    }

    /**
     * Gets shippingMethod
     *
     * @return string|null
    
     */
    public function getShippingMethod()
    {
        return $this->container['shippingMethod'];
    }

    /**
     * Sets shippingMethod
     *
     * @param string|null $shippingMethod Shipping method of an order. Currently supported type: 'EXPEDITED', 'STANDARD'
     *
     * @return self
    
     */
    public function setShippingMethod($shippingMethod)
    {
        if (is_null($shippingMethod)) {
            throw new \InvalidArgumentException('non-nullable shippingMethod cannot be null');
        }
        $allowedValues = $this->getShippingMethodAllowableValues();
        if (!in_array($shippingMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shippingMethod', must be one of '%s'",
                    $shippingMethod,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['shippingMethod'] = $shippingMethod;
        return $this;
    }

    /**
     * Gets shippingTo
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PickupPersonDetails
    
     */
    public function getShippingTo()
    {
        return $this->container['shippingTo'];
    }

    /**
     * Sets shippingTo
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PickupPersonDetails $shippingTo shippingTo
     *
     * @return self
    
     */
    public function setShippingTo($shippingTo)
    {
        if (is_null($shippingTo)) {
            throw new \InvalidArgumentException('non-nullable shippingTo cannot be null');
        }

        $this->container['shippingTo'] = $shippingTo;
        return $this;
    }

    /**
     * Gets chargeDetails
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ChargeDetails[]
    
     */
    public function getChargeDetails()
    {
        return $this->container['chargeDetails'];
    }

    /**
     * Sets chargeDetails
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ChargeDetails[] $chargeDetails Item charge details
     *
     * @return self
    
     */
    public function setChargeDetails($chargeDetails)
    {
        if (is_null($chargeDetails)) {
            throw new \InvalidArgumentException('non-nullable chargeDetails cannot be null');
        }

        $this->container['chargeDetails'] = $chargeDetails;
        return $this;
    }
}
