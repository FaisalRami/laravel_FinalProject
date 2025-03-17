<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Category;

class StoreController extends Controller
{
    public function index(){
        $stores=Store::all();
        return view('admin.products.index' ,compact('stores'));
    }

    public function create(){
        $categories= Category::all();
        return view('admin.products.create' , compact('categories'));
    }

    public function store(Request $request){
        $store=new Store;

        $store_name = $request->name;
        $store_category=$request->category;
        $store_price=$request->price;
        $store_quantity=$request->quantity;
        $store_description=$request->description;

        $store->name =$store_name;
        $store->category =$store_category;
        $store->price =$store_price;
        $store->quantity =$store_quantity;
        $store->description =$store_description;

        $store->save();

        return redirect()->back();
    }

    public function destroy($id){
        Store::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $store=Store::find($id);
        $stores=Store::all();
        $categories=Category::all();
        $category_name = Category::find($store->category);
        return view('admin.products.edit' , compact('store' , 'stores' , 'categories' , 'category_name'));
    }

    public function update(Request $request  , $id){
        $store = Store::find($id);
        $store_name = $request->name;
        $store_category=$request->category;
        $store_price=$request->price;
        $store_quantity=$request->quantity;
        $store_description=$request->description;

        $store->name =$store_name;
        $store->category =$store_category;
        $store->price =$store_price;
        $store->quantity =$store_quantity;
        $store->description =$store_description;

        $store->save();
        return redirect('products/index');
    }



}
