<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }



    public function index(){
        $categories=Category::all();
        // $categories=Category::where('user_id' , Auth::id())->paginate(3);
        return view('admin.categories.index' ,compact('categories'));
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        $categories=new Category;
        $category_name = $request->name;
        $categories->name =$category_name;
        $categories->save();

        return redirect()->back();
    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $category=Category::find($id);
        $categories=Category::all();
        return view('admin.categories.edit' , compact('category' , 'categories'));
    }

    public function update(Request $request  , $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('categories/index');

    }




}
