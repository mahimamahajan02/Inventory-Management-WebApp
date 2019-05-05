<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;

class CurrencyController extends Controller
{

public function index (){
  $currency = Currency::orderBy('name')->get();
  return view ('settings.currency.index', compact ('currency'));
}

public function create (){
  return view ('settings.currency.new');
}

public function store (Request $request){

    Currency::create([
      'name'=>$request->currenc,
    ]);

    \Session::flash('flash_message','Currency added successfully');

    return redirect ('/settings/currency');
}



public function edit ($id){
  $currency = Currency::find($id);
  return view ('settings.currency.edit', compact('currency'));
}


public function update (Request $request,$id){

    Currency::where('id','=',$id)
      ->update([
        'name'=>$request->currenc,
      ]);

      \Session::flash('flash_message','Currency updated successfully');

    return redirect ('/settings/currency');
}

public function delete($id)
{
  Currency::destroy($id);
  return redirect ('/settings/currency');
}



}
