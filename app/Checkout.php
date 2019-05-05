<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $guarded = [];
    public function item()
    {
      return $this->hasOne(Item::class, 'id', 'item_id');
    }
    public function location()
    {
      return $this->hasOne(Location::class, 'id', 'location_id');
    }
    public function customer()
    {
      return $this->hasOne(Customer::class, 'id', 'customer_id');
    }

}
