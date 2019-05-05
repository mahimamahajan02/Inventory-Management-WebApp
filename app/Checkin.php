<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $guarded = [];

    public function item()
    {
      return $this->hasOne(Item::class, 'id', 'item_id')->withDefault('Item deleted');
    }
    public function location()
    {
      return $this->hasOne(Location::class, 'id', 'location_id')->withDefault('Location deleted');
    }
    public function supplier()
    {
      return $this->hasOne(Supplier::class, 'id', 'supplier_id')->withDefault('Supplier deleted');
    }

}
