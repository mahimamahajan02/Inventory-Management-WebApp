<?php

function items()
{
  return App\Item::orderBy('name')->get();
}

function locations()
{
  return App\Location::orderBy('name')->get();
}

function suppliers()
{
  return App\Supplier::orderBy('name')->get();
}
function customers()
{
  return App\Customer::orderBy('name')->get();
}

function checkin()
{
  return App\Checkin::orderBy('name')->get();
}
function checkout()
{
  return App\Checkout::orderBy('name')->get();
}
function category()
{
  return App\Category::orderBy('name')->get();
}
function currency()
{
  return App\Currency::orderBy('name')->get();
}

function unit()
{
  return App\Unit::orderBy('name')->get();
}



function getStock($item_id)
{
  return App\Item::find($item_id)->current_stock;
}

function getReorderLevel($item_id)
{
  return App\Item::find($item_id)->reorder_level;
}

function addStock($item_id,$addQty)
{
  App\Item::find($item_id)->increment('current_stock',$addQty);
}

function removeStock($item_id,$addQty)
{
  App\Item::find($item_id)->decrement('current_stock',$addQty);
}

function checkLowStock($item_id)
{
  $current_stock=getStock($item_id);
  $reOrderLevel=getReorderLevel($item_id);
  if ($current_stock<=$reOrderLevel) {
    return true;
  }
  else {
    return false;
  }
}
