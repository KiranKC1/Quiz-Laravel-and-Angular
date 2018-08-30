<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class Information extends Model
{
    protected $table = 'informations';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
