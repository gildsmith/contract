<?php

namespace Gildsmith\Contract\Cart;

use Gildsmith\Contract\Order\Order;
use Gildsmith\Contract\Payment\PaymentMethod;
use Gildsmith\Contract\Shipping\ShippingMethod;
use Gildsmith\Contract\User\Customer;
use Illuminate\Support\Collection;

/**
 * Interface representing cart instance. It consists of all
 * essential properties allowing one to make an order.
 *
 * @property int $id
 * @property Customer $customer
 * @property Collection<int, CartProduct> $products
 * @property PaymentMethod $paymentMethod
 * @property ShippingMethod $shippingMethod
 */
interface Cart
{
    /**
     * Transforms the cart into an order instance.
     */
    public function order(): Order;

    /**
     * Validates whether the cart is eligible for checkout.
     */
    public function validate(): bool;
}
