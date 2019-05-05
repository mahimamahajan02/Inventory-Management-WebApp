<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitController extends Controller
{

public function index (){
  $units = Unit::orderBy('name')->get();
  return view ('settings.units.index', compact ('units'));
}

public function create (){
  return view ('settings.units.new');
}

public function store (Request $request){

    Unit::create([
      'name'=>$request->unit,
    ]);

    \Session::flash('flash_message','Unit added successfully');

    return redirect ('/settings/units');
}


public function edit ($id){
  $unit = Unit::find($id);
  return view ('settings.units.edit', compact('unit'));
}


public function update (Request $request,$id){

    Unit::where('id','=',$id)
      ->update([
        'name'=>$request->unit,
      ]);

      \Session::flash('flash_message','Unit updated successfully');

    return redirect ('/settings/units');
}

public function delete($id)
{
  Unit::destroy($id);
    return redirect ('/settings/units');
}

}
