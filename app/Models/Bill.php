<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    protected $connection = 'mongodb';

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'payment_date',
        'values',
    ];
}
