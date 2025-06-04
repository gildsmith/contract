<?php

namespace Gildsmith\Contract\Facades;

use Gildsmith\Contract\Inventory\WarehouseInterface;
use Gildsmith\Contract\Product\Product;

interface Inventory
{
    /**
     * The total quantity of a product available across all passed warehouses.
     * When warehouses are not specified, all existing are used.
     */
    public function quantity(Product $product, ?WarehouseInterface ...$warehouses): int;
}
