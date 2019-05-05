<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

protected $guarded = [];

public function unit()
{
  return $this->hasOne(Unit::class, 'id', 'unit_id')->withDefault('Unit deleted');
}
public function category()
{
  return $this->hasOne(category::class, 'id', 'category_id')->withDefault('Category deleted');
}



}
