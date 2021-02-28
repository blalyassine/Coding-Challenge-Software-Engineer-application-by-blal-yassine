<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function Category()
    {
        return $this->hasMany(Category::class)->orderBy('created_at','DESC');
    }
}
