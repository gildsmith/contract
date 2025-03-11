<?php

namespace Gildsmith\Contract\Cart;

use Gildsmith\Contract\Inventory\Product;
use Gildsmith\Contract\Inventory\Quantity;
use Gildsmith\Contract\Pricing\Price;

/**
 * Represents a product in a cart.
 *
 * @property Cart $cart
 * @property Product $product
 * @property Quantity $quantity
 * @property Price $price
 */
interface CartProduct {}
