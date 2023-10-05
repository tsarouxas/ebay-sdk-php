<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Inventory\Types;

/**
 * @property \DTS\eBaySDK\Inventory\Types\ErrorDetailV3[] $errors
 * @property \DTS\eBaySDK\Inventory\Enums\FormatTypeEnum $format
 * @property \DTS\eBaySDK\Inventory\Enums\MarketplaceEnum $marketplaceId
 * @property string $offerId
 * @property string $sku
 * @property int $statusCode
 * @property \DTS\eBaySDK\Inventory\Types\ErrorDetailV3[] $warnings
 */
class BulkOfferResponse extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'errors' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors',
        ],
        'format' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'format',
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId',
        ],
        'offerId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'offerId',
        ],
        'sku' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sku',
        ],
        'statusCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'statusCode',
        ],
        'warnings' => [
            'type' => 'DTS\eBaySDK\Inventory\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings',
        ],
    ];

    /**
     * @param  array  $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (! array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}