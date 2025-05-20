<?php

namespace Gildsmith\Contract\Product;

/**
 * A single allowed value for an Attribute,
 * e.g. "red" for colour or "M" for size.
 */
interface AttributeValue
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
    public string $name { get; set; }

    /**
     * The parent Attribute this value belongs to.
     */
    public Attribute $attribute { get; }
}
