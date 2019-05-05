<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{

public function index (){
  $locations = Location::orderBy('name')->get();
  return view ('settings.locations.index', compact ('locations'));
}

public function create (){
  return view ('settings.locations.new');
}

public function store (Request $request){

    Location::create([
      'name'=>$request->location,
    ]);

    \Session::flash('flash_message','Location added successfully');

    return redirect ('/settings/locations');
}



public function edit ($id){
  $location = Location::find($id);
  return view ('settings.locations.edit', compact('location'));
}


public function update (Request $request,$id){

    Location::where('id','=',$id)
      ->update([
        'name'=>$request->location,
      ]);

      \Session::flash('flash_message','Location updated successfully');

    return redirect ('/settings/locations');
}

public function delete($id)
{
  Location::destroy($id);
  return redirect ('/settings/locations');
}


}
