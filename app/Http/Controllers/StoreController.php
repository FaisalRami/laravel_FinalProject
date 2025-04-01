<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
        $categories=Category::all();
        $store=Store::find(1);
        // $stores=Store::all();
        $stores=Store::where('user_id' , Auth::id())->paginate(3);
        // $stores = Store::with('category')->get();
        $category_name = Category::find($store->category);
        return view('admin.products.index' ,compact('stores', 'category_name' , 'categories'));
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


        $store->user_id = Auth::id();
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
        return redirect('/');
    }



}
