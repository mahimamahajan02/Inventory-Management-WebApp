<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Category;

class SupplierController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

public function index (){
  $suppliers = Supplier::orderBy('name')->get();
  return view ('suppliers.index', compact ('suppliers'));
}

public function create (){
  return view ('suppliers.new');
}

public function store (Request $request){

    $this->validate($request,['email'=>'email','phone'=>'required|min:10']);

  Supplier::create([
      'name'=>$request->name,
      'category_id'=>$request->category,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'address'=>$request->address,

    ]);

    \Session::flash('flash_message','Supplier added successfully');

    return redirect ('/suppliers');

}



public function edit ($id){
  $supplier = Supplier::find($id);
  $categories = Category::orderBy('name')->get();

  return view ('suppliers.edit', compact('supplier','categories'));
}



public function update (Request $request,$id){

    Supplier::where('id','=',$id)
      ->update([
        'name'=>$request->name,
        'category_id'=>$request->category,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,

      ]);

      \Session::flash('flash_message','Supplier updated successfully');

    return redirect ('/suppliers');
}

public function delete($id)
{
  Supplier::destroy($id);
  return redirect ('/suppliers');
}
}
