<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    protected $connection = 'mondogb';

    protected $fillable = ['title'];
}
