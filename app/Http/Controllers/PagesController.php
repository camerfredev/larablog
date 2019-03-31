<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\MailContact;

class PagesController extends Controller
{
    /**
     * homePage
     *
     * @return void
     */
    public function homePage()
    {
        $data=[
            'title'=> 'je suis dans le tableaux data',
            'sub-title'=>'bonjour le monde',
            'bg-img'=> asset('blog/img/home-bg.jpg'),
        ];

        return view('frontend.home.index',compact('data'));
    }



    /**
     * about
     *
     * @return void
     */
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
    

    public function Postcontact(ContactRequest $request)
    {
        // dd($request->email,$request->name,$request->content );

        Mail::to('admin@gmail.com')->send(new MailContact($request->name,$request->email,$request->content));

        $request->session()->flash('success', 'votre email bien été envoyer');

        return redirect()->back();
        
    }

}
