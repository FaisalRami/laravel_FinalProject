<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class FrontController extends Controller
{
    public function index(){
        $stores=Store::all();
        return view('home.index' , compact('stores'));
    }
}
