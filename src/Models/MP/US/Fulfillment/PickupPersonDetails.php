<?php

/**
 * PickupPersonDetails
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
 * PickupPersonDetails Class Doc Comment
 *
 * @category Class

 * @description Shipping address details

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PickupPersonDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PickupPersonDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'contact' => '\Walmart\Models\MP\US\Fulfillment\Contact',
        'address' => '\Walmart\Models\MP\US\Fulfillment\CustomerAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'contact' => null,
        'address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contact' => false,
        'address' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'contact' => 'contact',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'contact' => 'setContact',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'contact' => 'getContact',
        'address' => 'getAddress'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets contact
     *
     * @return \Walmart\Models\MP\US\Fulfillment\Contact
    
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Walmart\Models\MP\US\Fulfillment\Contact $contact contact
     *
     * @return self
    
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }

        $this->container['contact'] = $contact;
        return $this;
    }

    /**
     * Gets address
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CustomerAddress|null
    
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CustomerAddress|null $address address
     *
     * @return self
    
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;
        return $this;
    }
}
