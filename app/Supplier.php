<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];
    public function category()
    {
      return $this->hasOne(category::class, 'id', 'category_id')->withDefault('Category celeted');
    }


}
