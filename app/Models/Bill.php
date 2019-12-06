<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    protected $connection = 'mongodb{{API_URL}}/category';

    protected $fillable = ['title'];
}
