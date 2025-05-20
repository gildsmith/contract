<?php

namespace Gildsmith\Contract\Cart;

use Gildsmith\Contract\Inventory\Quantity;
use Gildsmith\Contract\Pricing\Price;
use Gildsmith\Contract\Product\Product;

/**
 * Represents a product in a cart.
 *
 * @property Cart $cart
 * @property Product $product
 * @property Quantity $quantity
 * @property Price $price
 */
interface CartProduct {}
