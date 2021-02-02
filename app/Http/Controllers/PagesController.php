<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='Welcome to Sculpture Classic Fitness Gym ';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function gallery(){
        $title ='Gallery';
        //return view('pages.index',compact('title'));
        return view('pages.gallery')->with('title', $title);
    }
    public function  schedule(){
        $data = array(
            'title' =>'schedules',
                'schedules' => ['Aerobics','Tabata','Pilates']
        );  
        //return view('pages.shop',compact('title'));
        return view('pages.schedule')->with($data);
    }
    public function about(){
        $title = 'Learn More About Us';
        //return view('pages.about',compact('title'));
        return view('pages.about')->with('title', $title);
    }
    public function contacts(){
        $title ='Contacts';
        //return view('pages.index',compact('title'));
        return view('pages.gallery')->with('title', $title);
    }
}
