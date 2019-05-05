<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Checkin;
use App\Item;
use App\Location;
use App\Supplier;

class CheckinController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

public function index (){
  $checkin = Checkin::orderBy('id','desc')->get();
  return view ('checkin.index', compact ('checkin'));
}

public function create (){
  return view ('checkin.new');
}

public function store (Request $request){

  Checkin::create([
      'item_id'=>$request->item,
      'quantity'=>$request->quantity,
      'location_id'=>$request->location,
      'supplier_id'=>$request->supplier,
      'date'=>$request->date,
    ]);

    addStock($request->item,$request->quantity);

    \Session::flash('flash_message','Checked-in added successfully');

    return redirect ('/checkin');

}

public function edit ($id){
  $checkin = Checkin::find($id);
  $items = Item::orderBy('name')->get();
  $locations = Location::orderBy('name')->get();
  $suppliers = Supplier::orderBy('name')->get();

  return view ('checkin.edit', compact('checkin','items','locations','suppliers'));

}

public function update (Request $request,$id){

    Checkin::where('id','=',$id)
      ->update([
        'item_id'=>$request->item,
        'quantity'=>$request->quantity,
        'location_id'=>$request->location,
        'supplier_id'=>$request->supplier,
        'date'=>$request->date,
      ]);

      \Session::flash('flash_message','Check-in updated successfully');

    return redirect ('/checkin');
}


public function delete($id)
{
  Checkin::destroy($id);
  return redirect ('/checkin');
}


}
