<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

public function index (){
  $category = Category::orderBy('name')->get();
  return view ('settings.category.index', compact ('category'));
}

public function create (){
  return view ('settings.category.new');
}

public function store (Request $request){

    Category::create([
      'name'=>$request->categor,
    ]);

    \Session::flash('flash_message','Category added successfully');

    return redirect ('/settings/category');
}




public function edit ($id){
  $category = Category::find($id);
  return view ('settings.category.edit', compact('category'));
}


public function update (Request $request,$id){

    Category::where('id','=',$id)
      ->update([
        'name'=>$request->categor,
      ]);

      \Session::flash('flash_message','Category updated successfully');

    return redirect ('/settings/category');
}

public function delete($id)
{
  Category::destroy($id);
  return redirect ('/settings/category');
}



}
