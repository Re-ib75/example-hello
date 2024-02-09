<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class PagesController extends Controller
{
    //get index page(/)
    public function getIndex(){
        return view('pages.index');
        return 'hello';
    }

    public function store(Request $request){
        // dd($request);
            $temp = new product();
            $temp->quantity= $request->quan;
            $temp->name= $request->my_name;
            $temp->price= $request->price;

            $temp->save();
        // dd($request->my_name);

    }
}
