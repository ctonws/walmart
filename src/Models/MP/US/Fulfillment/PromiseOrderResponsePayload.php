<?php

/**
 * PromiseOrderResponsePayload
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
 * PromiseOrderResponsePayload Class Doc Comment
 *
 * @category Class

 * @description Response payload.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseOrderResponsePayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PromiseOrderResponsePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'offers' => '\Walmart\Models\MP\US\Fulfillment\PromiseResponseOffer[]',
        'destinations' => '\Walmart\Models\MP\US\Fulfillment\PromiseDestinationResponse[]',
        'prepurchaseHandle' => 'string',
        'fulfillmentPlans' => '\Walmart\Models\MP\US\Fulfillment\FulfillmentPlan[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'offers' => null,
        'destinations' => null,
        'prepurchaseHandle' => null,
        'fulfillmentPlans' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offers' => false,
        'destinations' => false,
        'prepurchaseHandle' => false,
        'fulfillmentPlans' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'offers' => 'offers',
        'destinations' => 'destinations',
        'prepurchaseHandle' => 'prepurchaseHandle',
        'fulfillmentPlans' => 'fulfillmentPlans'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'offers' => 'setOffers',
        'destinations' => 'setDestinations',
        'prepurchaseHandle' => 'setPrepurchaseHandle',
        'fulfillmentPlans' => 'setFulfillmentPlans'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'offers' => 'getOffers',
        'destinations' => 'getDestinations',
        'prepurchaseHandle' => 'getPrepurchaseHandle',
        'fulfillmentPlans' => 'getFulfillmentPlans'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offers', $data ?? [], null);
        $this->setIfExists('destinations', $data ?? [], null);
        $this->setIfExists('prepurchaseHandle', $data ?? [], null);
        $this->setIfExists('fulfillmentPlans', $data ?? [], null);
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
     * Gets offers
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseResponseOffer[]|null
    
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseResponseOffer[]|null $offers Offer details indicating available quantity vs required quantify for offer
     *
     * @return self
    
     */
    public function setOffers($offers)
    {
        if (is_null($offers)) {
            throw new \InvalidArgumentException('non-nullable offers cannot be null');
        }

        $this->container['offers'] = $offers;
        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseDestinationResponse[]|null
    
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseDestinationResponse[]|null $destinations Customer order destination details.
     *
     * @return self
    
     */
    public function setDestinations($destinations)
    {
        if (is_null($destinations)) {
            throw new \InvalidArgumentException('non-nullable destinations cannot be null');
        }

        $this->container['destinations'] = $destinations;
        return $this;
    }

    /**
     * Gets prepurchaseHandle
     *
     * @return string|null
    
     */
    public function getPrepurchaseHandle()
    {
        return $this->container['prepurchaseHandle'];
    }

    /**
     * Sets prepurchaseHandle
     *
     * @param string|null $prepurchaseHandle The identifier to identify the response.
     *
     * @return self
    
     */
    public function setPrepurchaseHandle($prepurchaseHandle)
    {
        if (is_null($prepurchaseHandle)) {
            throw new \InvalidArgumentException('non-nullable prepurchaseHandle cannot be null');
        }

        $this->container['prepurchaseHandle'] = $prepurchaseHandle;
        return $this;
    }

    /**
     * Gets fulfillmentPlans
     *
     * @return \Walmart\Models\MP\US\Fulfillment\FulfillmentPlan[]|null
    
     */
    public function getFulfillmentPlans()
    {
        return $this->container['fulfillmentPlans'];
    }

    /**
     * Sets fulfillmentPlans
     *
     * @param \Walmart\Models\MP\US\Fulfillment\FulfillmentPlan[]|null $fulfillmentPlans Fulfillment plans details.
     *
     * @return self
    
     */
    public function setFulfillmentPlans($fulfillmentPlans)
    {
        if (is_null($fulfillmentPlans)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentPlans cannot be null');
        }

        $this->container['fulfillmentPlans'] = $fulfillmentPlans;
        return $this;
    }
}
