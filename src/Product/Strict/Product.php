<?php

namespace Gildsmith\Contract\Product\Strict;

use Illuminate\Support\Collection;

/**
 * In Gildsmith, a Product represents a variant of a sellable item.
 * Each Product is a standalone entity with its own attributes and metadata,
 * but without pricing or stock information — those are added separately.
 *
 * Whether something is a distinct Product is up to your design, but a good
 * rule of thumb is: if it would have a unique EAN, it probably makes sense
 * as a separate Product instance.
 *
 * Products are structured using Blueprints — predefined patterns that specify
 * which attributes are required for a given type. For example, a chair
 * might require dimensions and colour, while a car might require number of doors.
 *
 * @property int $id
 * @property Blueprint $blueprint
 * @property Collection<int, ProductCollection> $collections
 * @property Collection<int, Attribute> $attributes
 *
 * @see ProductCollection
 * todo
 */
interface Product extends \Gildsmith\Contract\Product\Product
{
    //
}
