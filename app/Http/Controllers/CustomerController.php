<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

public function index (){
  $customers = Customer::orderBy('name')->get();
  return view ('customers.index', compact ('customers'));
}

public function create (){
  return view ('customers.new');
}

public function store (Request $request){

  $this->validate($request,['email'=>'email','phone'=>'required|min:10']);


  Customer::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'address'=>$request->address,

    ]);

    \Session::flash('flash_message','Customer added successfully');

    return redirect ('/customers');

}

public function edit ($id){
  $customer = Customer::find($id);
  return view ('customers.edit', compact('customer'));
}



public function update (Request $request,$id){

    Customer::where('id','=',$id)
      ->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,

      ]);

      \Session::flash('flash_message','Customer updated successfully');

    return redirect ('/customers');
}

public function delete($id)
{
  Customer::destroy($id);
  return redirect ('/customers');
}


}
