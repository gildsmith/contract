<?php

namespace Gildsmith\Contract\Facades;

use Gildsmith\Contract\Facades\Product\Attribute as AttributeFacade;
use Gildsmith\Contract\Facades\Product\AttributeValue as AttributeValueFacade;
use Gildsmith\Contract\Facades\Product\Blueprint as BlueprintFacade;
use Gildsmith\Contract\Facades\Product\ProductCollection as ProductCollectionFacade;
use Gildsmith\Contract\Product\ProductInterface;
use Gildsmith\Contract\Facades\TrashableFacade;

/**
 * Product Facade serves as a programmatic interface for managing products.
 *
 * It mimics an internal API, allowing consumers to perform product
 * operations without knowledge of the underlying implementation.
 *
 * @extends TrashableFacade<ProductInterface>
 */
interface Product extends TrashableFacade
{
    /**
     * Access the attribute management facade.
     */
    public function attribute(): AttributeFacade;

    /**
     * Access the attribute value management facade.
     */
    public function attributeValue(): AttributeValueFacade;

    /**
     * Access the blueprint management facade.
     */
    public function blueprint(): BlueprintFacade;

    /**
     * Access the product collection management facade.
     */
    public function collection(): ProductCollectionFacade;

    // CRUD operations inherited from TrashableFacade
}
