<?php

namespace App\Services;

use App\Models\Payment;
use App\Services\BillService;

class PaymentService extends Service
{
    protected $billService;

    public function __construct(Payment $payment, BillService $billService)
    {
        parent::__construct($payment);

        $this->billService = $billService;
    }

    public function payAccount(
        Payment $payment,
        $payment_date = null,
        $payment_value = null,
        $payment_description = null
    ){
        $date = $payment_date ?? $payment->payment_date;
        $value = $payment_value ?? $payment->value;
        $description = $payment_description ?? 'Pagamento de ' . $payment->title;

        $data = [
            'title' => $payment->title,
            'category_id' => $payment->category_id,
            'payment_date' => $date,
            'values' => [
                [
                    'description' => $description,
                    'date' => $date,
                    'value' => $value,
                ]
            ],
        ];

        if ($this->billService->store($data)){
            return TRUE;
        }

        return FALSE;
    }

}