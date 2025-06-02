<?php

namespace Gildsmith\Contract\Product;

use Illuminate\Support\Collection;

/**
 * Blueprint is a set of validation rules for product fields.
 * You can think of a blueprint as an abstract "chair" or a "skirt" that
 * requires certain attributes to be complete.
 *
 * This object is kind of similar to Attribute Sets in Magento.
 * todo
 *
 * @property string $name
 *   Human-readable name.
 *
 * @property Collection<int, AttributeInterface> $attributes
 *  List of all attributes attached to this
 *
 * @property Collection<int, ProductInterface> $products
 *  todo
 *
 * @property-read bool $strict
 *  Whether this Blueprint forbids any attributes that
 *  are not explicitly declared in $attributes.
 */
interface BlueprintInterface
{
    /**
     * todo whether the property can be set. This checks against strict.
     */
    public function allows(string ...$properties): bool;

    /**
     * todo just like allows but also checks if it's required
     */
    public function requires(string ...$properties): bool;
}
