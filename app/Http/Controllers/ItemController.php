<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\unit;
use App\Supplier;

class ItemController extends Controller
{

public function __construct()
{
    $this->middleware('auth');
}


public function index (){
  $items = Item::orderBy('name')->get();
  return view ('items.index', compact ('items'));
}

public function create (){
  //return view ('items.new');

 $units = Unit::orderBy('name')->get();
  $categories = Category::orderBy('name')->get();
  $suppliers = Supplier::orderBy('name')->get();

  return view ('items.new',compact('units','categories','suppliers'));
}

public function store (Request $request){

  Item::create([
      'name'=>$request->name,
      'description'=>$request->description,
      'category_id'=>$request->category,
      'unit_id'=>$request->unit,
      'current_stock'=>$request->current_stock,
      'reorder_level'=>$request->reorder_level,
    ]);

    \Session::flash('flash_message','Item added successfully');
    // \Session::flash('error_message','Some error occurred');

    return redirect ('/items');

}


public function edit ($id){
  $item = Item::find($id);
  $categories = Category::orderBy('name')->get();
  $units = Unit::orderBy('name')->get();
  $suppliers = Supplier::orderBy('name')->get();

  return view ('items.edit', compact('item','units','categories','suppliers'));
}

public function update (Request $request,$id){

    Item::where('id','=',$id)
      ->update([
        'name'=>$request->name,
        'description'=>$request->description,
        'category_id'=>$request->category,
        'unit_id'=>$request->unit,
        'reorder_level'=>$request->reorder_level,
      ]);

      \Session::flash('flash_message','Item updated successfully');

    return redirect ('/items');
}

public function delete($id)
{
  Item::destroy($id);
  return redirect ('/items');
}

}
