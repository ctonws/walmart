<?php

/**
 * ScoreDetails
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;

use Walmart\Models\BaseModel;

/**
 * ScoreDetails Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ScoreDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ScoreDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'offer' => '\Walmart\Models\MP\US\Insights\Offer',
        'ratingReviews' => '\Walmart\Models\MP\US\Insights\RatingReviews',
        'postPurchase' => '\Walmart\Models\MP\US\Insights\PostPurchase',
        'contentAndDiscoverability' => '\Walmart\Models\MP\US\Insights\ContentAndDiscoverability'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'offer' => null,
        'ratingReviews' => null,
        'postPurchase' => null,
        'contentAndDiscoverability' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer' => false,
        'ratingReviews' => false,
        'postPurchase' => false,
        'contentAndDiscoverability' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'offer' => 'offer',
        'ratingReviews' => 'ratingReviews',
        'postPurchase' => 'postPurchase',
        'contentAndDiscoverability' => 'contentAndDiscoverability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'offer' => 'setOffer',
        'ratingReviews' => 'setRatingReviews',
        'postPurchase' => 'setPostPurchase',
        'contentAndDiscoverability' => 'setContentAndDiscoverability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'offer' => 'getOffer',
        'ratingReviews' => 'getRatingReviews',
        'postPurchase' => 'getPostPurchase',
        'contentAndDiscoverability' => 'getContentAndDiscoverability'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('ratingReviews', $data ?? [], null);
        $this->setIfExists('postPurchase', $data ?? [], null);
        $this->setIfExists('contentAndDiscoverability', $data ?? [], null);
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
     * Gets offer
     *
     * @return \Walmart\Models\MP\US\Insights\Offer|null
    
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \Walmart\Models\MP\US\Insights\Offer|null $offer offer
     *
     * @return self
    
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            throw new \InvalidArgumentException('non-nullable offer cannot be null');
        }

        $this->container['offer'] = $offer;
        return $this;
    }

    /**
     * Gets ratingReviews
     *
     * @return \Walmart\Models\MP\US\Insights\RatingReviews|null
    
     */
    public function getRatingReviews()
    {
        return $this->container['ratingReviews'];
    }

    /**
     * Sets ratingReviews
     *
     * @param \Walmart\Models\MP\US\Insights\RatingReviews|null $ratingReviews ratingReviews
     *
     * @return self
    
     */
    public function setRatingReviews($ratingReviews)
    {
        if (is_null($ratingReviews)) {
            throw new \InvalidArgumentException('non-nullable ratingReviews cannot be null');
        }

        $this->container['ratingReviews'] = $ratingReviews;
        return $this;
    }

    /**
     * Gets postPurchase
     *
     * @return \Walmart\Models\MP\US\Insights\PostPurchase|null
    
     */
    public function getPostPurchase()
    {
        return $this->container['postPurchase'];
    }

    /**
     * Sets postPurchase
     *
     * @param \Walmart\Models\MP\US\Insights\PostPurchase|null $postPurchase postPurchase
     *
     * @return self
    
     */
    public function setPostPurchase($postPurchase)
    {
        if (is_null($postPurchase)) {
            throw new \InvalidArgumentException('non-nullable postPurchase cannot be null');
        }

        $this->container['postPurchase'] = $postPurchase;
        return $this;
    }

    /**
     * Gets contentAndDiscoverability
     *
     * @return \Walmart\Models\MP\US\Insights\ContentAndDiscoverability|null
    
     */
    public function getContentAndDiscoverability()
    {
        return $this->container['contentAndDiscoverability'];
    }

    /**
     * Sets contentAndDiscoverability
     *
     * @param \Walmart\Models\MP\US\Insights\ContentAndDiscoverability|null $contentAndDiscoverability contentAndDiscoverability
     *
     * @return self
    
     */
    public function setContentAndDiscoverability($contentAndDiscoverability)
    {
        if (is_null($contentAndDiscoverability)) {
            throw new \InvalidArgumentException('non-nullable contentAndDiscoverability cannot be null');
        }

        $this->container['contentAndDiscoverability'] = $contentAndDiscoverability;
        return $this;
    }
}
