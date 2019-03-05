<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage()
    {
        $data=[
            'title'=> 'je suis dans le tableaux data',
            'sub-title'=>'bonjour le monde',
            'bg-img'=> asset('blog/img/home-bg.jpg'),
        ];

        return view('frontend.home.index',compact('data'));
    }



    public function about()
    {
        $data=[
            'title'=> 'ABOUT US',
            'sub-title'=>'bonjour le monde',
            'bg-img'=> asset('blog/img/home-bg.jpg'),
        ];

        return view('frontend.pages.about',compact('data'));
    }
    
    public function contact()
    {
        $data=[
            'title'=> 'CONTACT US',
            'sub-title'=>'bonjour le monde',
            'bg-img'=> asset('blog/img/home-bg.jpg'),
        ];
        return view('frontend.pages.contact',compact('data'));
    }
    

}
