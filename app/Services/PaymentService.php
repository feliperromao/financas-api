<?php

namespace App\Services;

use App\Models\Payment;

class PaymentService extends Service
{
    public function __construct(Payment $category)
    {
        parent::__construct($category);
    }

}