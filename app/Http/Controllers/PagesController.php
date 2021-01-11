<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to Beauty and Cosmetics';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function shop(){
        $title ='All Under One Roof';
        //return view('pages.index',compact('title'));
        return view('pages.shop')->with('title', $title);
    }
    public function  products(){
        $data = array(
            'title' =>'Products',
                'products' => ['personal Care','Make Up','Hair Care']
        );  
        //return view('pages.shop',compact('title'));
        return view('pages.products')->with($data);
    }
    public function about(){
        $title = 'Learn More About Us';
        //return view('pages.about',compact('title'));
        return view('pages.about')->with('title', $title);
    }
}
