<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //get index page(/)
    public function getIndex(){
        return view('pages.index');
        return 'hello';
    }
}
