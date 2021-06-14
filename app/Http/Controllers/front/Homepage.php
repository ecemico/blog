<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class Homepage extends Controller
{
    public function index(){
        $data['categories']=Category::inrandomOrder()->get();
        return view('front.homePage',$data);
    }
}
