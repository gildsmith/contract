<?php

namespace Gildsmith\Contract\Product;

/**
 * A single allowed value for an Attribute,
 * e.g. "red" for colour or "M" for size.
 *
 * @property-read string $id
 *  Surrogate primary key for database relations.
 *  Used internally for efficient joins and indexing.
 *
 * @property-read string $code
 *  Unique business identifier.
 *  Immutable and used for lookups.
 *
 * @property string $name
 *  Human-readable name.
 *
 * @property-read AttributeInterface $attribute
 *  The parent Attribute this value belongs to.
 */
interface AttributeValueInterface {}
