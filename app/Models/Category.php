<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $connection = 'mongodb';

    protected $fillable = ['description', 'user_id', 'color', ''];
}
