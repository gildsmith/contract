<?php

namespace Gildsmith\Contract\Product\Strict;

/**
 * Blueprint is a set of validation rules for product fields.
 * Think of a product as a generic "chair" or a "skirt" that requires
 * certain fields. Blueprint to a product is the same what class to
 * an object is.
 *
 * This object is kind of similar to Attribute Sets in Magento.
 * todo
 */
interface BlueprintInterface extends \Gildsmith\Contract\Product\BlueprintInterface
{
    /**
     * // todo whether the property can be set. It prolly should allow dot notation for nested data
     */
    public function allows(string ...$properties): bool;

    /**
     * // todo just like allows but also checks if it's required
     */
    public function requires(string ...$properties): bool;

    /**
     * Strict booleans don't allow overloading.
     */
    public function strict(): bool;
}
