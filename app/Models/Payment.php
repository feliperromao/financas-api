<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $connection = 'mondogb';

    protected $fillable = ['title', 'categori_id', 'payment_date', 'repeate', 'frequency','value'];
}
