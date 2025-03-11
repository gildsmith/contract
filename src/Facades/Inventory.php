<?php

namespace Gildsmith\Contract\Facades;

use Gildsmith\Contract\Inventory\Product;
use Gildsmith\Contract\Inventory\Warehouse;

interface Inventory
{
    public function quantity(Product $product, Warehouse ...$warehouses): bool;
}
