<?php

namespace Gildsmith\Contract\Product\Strict;

use Illuminate\Support\Collection;

/**
 * Represents a product attribute (e.g., colour, size, material).
 * Defines a category of characteristics that products can possess,
 * each with a predefined set of possible values.
 */
interface Attribute extends \Gildsmith\Contract\Product\Attribute
{
    /**
     * Surrogate primary key for database relations.
     * Used internally for efficient joins and indexing.
     */
    public string $id { get; }

    /**
     * Unique business identifier.
     * Immutable and used for lookups.
     */
    public string $code { get; }

    /**
     * Human-readable name of the attribute.
     */
    public string $name { get; }

    /**
     * Collection of all values available for this attribute.
     * Each entry is an AttributeValue representing one possible option.
     *
     * @var Collection<int, AttributeValue>
     */
    public Collection $values { get; }
}
