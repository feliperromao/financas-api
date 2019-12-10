<?php

namespace App\Services;

use App\Models\Bill;

/**
 * Este service tem como objetivo gerenciar as contas do usuario
 */
class BillService extends Service
{
    public function __construct(Bill $category)
    {
        parent::__construct($category);
    }

}