<?php

namespace Gildsmith\Contract\Product\Strict;

/**
 * Product Collection is an umbrella term to describe every kind of products set.
 * Instead of having bundles, variants, categories, and more, we have this object.
 *
 * Collections are purpose-agnostic. It means that a collection can mean many
 * things and be used for different reasons. You can even have a collection that's
 * completely virtual and not visible to users.
 *
 * There are some default, common keywords you can use.
 * todo
 */
interface ProductCollectionInterface extends \Gildsmith\Contract\Product\ProductCollectionInterface {}
