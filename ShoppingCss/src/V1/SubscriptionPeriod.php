<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/css/v1/css_product_common.proto

namespace Google\Shopping\Css\V1;

use UnexpectedValueException;

/**
 * The subscription period of the product.
 *
 * Protobuf type <code>google.shopping.css.v1.SubscriptionPeriod</code>
 */
class SubscriptionPeriod
{
    /**
     * Indicates that the subscription period is unspecified.
     *
     * Generated from protobuf enum <code>SUBSCRIPTION_PERIOD_UNSPECIFIED = 0;</code>
     */
    const SUBSCRIPTION_PERIOD_UNSPECIFIED = 0;
    /**
     * Indicates that the subscription period is month.
     *
     * Generated from protobuf enum <code>MONTH = 1;</code>
     */
    const MONTH = 1;
    /**
     * Indicates that the subscription period is year.
     *
     * Generated from protobuf enum <code>YEAR = 2;</code>
     */
    const YEAR = 2;

    private static $valueToName = [
        self::SUBSCRIPTION_PERIOD_UNSPECIFIED => 'SUBSCRIPTION_PERIOD_UNSPECIFIED',
        self::MONTH => 'MONTH',
        self::YEAR => 'YEAR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

