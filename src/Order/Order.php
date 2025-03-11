<?php

namespace Gildsmith\Contract\Order;

use Gildsmith\Contract\Cart\Cart;
use Gildsmith\Contract\Payment\Payment;
use Gildsmith\Contract\Shipping\Shipping;
use Gildsmith\Contract\User\Customer;

/**
 * @property int $id
 * @property Cart $cart
 * @property Customer $customer
 * @property Payment $payment
 * @property Shipping $shipping
 * @property Invoice $invoice
 */
interface Order
{
    // Ordering
    public function place();

    public function reorder();

    public function cancel();

    // Status management
    public function setStatus(string $type, Status $status);

    public function getStatus(string $type);
}
