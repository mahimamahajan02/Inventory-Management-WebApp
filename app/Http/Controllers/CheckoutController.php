<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Checkout;
use App\Item;
use App\Location;
use App\Customer;

class CheckoutController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

public function index (){
  $checkout = Checkout::orderBy('id','desc')->get();
  return view ('checkout.index', compact ('checkout'));
}

public function create (){
  return view ('checkout.new');
}


public function store (Request $request){

  $currentStock=getStock($request->item);
  $checkoutQty=$request->quantity;
  if ($currentStock < $checkoutQty) {
    \Session::flash('error_message','Could not check-out item because Checkout quantity is more than the current stock.');
  }
  else {
    Checkout::create([
      'item_id'=>$request->item,
      'quantity'=>$request->quantity,
      'location_id'=>$request->location,
      'customer_id'=>$request->customer,
      'date'=>$request->date,
    ]);

    removeStock($request->item,$request->quantity);
    \Session::flash('flash_message','Item checked-out successfully');
  }
    return redirect ('/checkout');
}

public function edit ($id){
  $checkout = Checkout::find($id);
  $items = Item::orderBy('name')->get();
  $locations = Location::orderBy('name')->get();
  $customers = Customer::orderBy('name')->get();

  return view ('checkout.edit', compact('checkout','items','locations','customers'));


}


public function update (Request $request,$id){

    Checkout::where('id','=',$id)
      ->update([
        'item_id'=>$request->item,
        'quantity'=>$request->quantity,
        'location_id'=>$request->location,
        'customer_id'=>$request->customer,
        'date'=>$request->date,
      ]);

      \Session::flash('flash_message','Check-out updated successfully');

    return redirect ('/checkout');
}
public function delete($id)
{
  Checkout::destroy($id);
  return redirect ('/checkout');
}


}
