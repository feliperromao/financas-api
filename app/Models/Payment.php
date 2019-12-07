<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $connection = 'mongodb';

    protected $fillable = ['title','categori_id','payment_date','repeate','frequency','pay_in','value', 'user_id'];
}
