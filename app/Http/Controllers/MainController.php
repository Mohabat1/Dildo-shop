<?php

namespace App\Http\Controllers;

use App\Models\Compact;
use Illuminate\Http\Request;

class MainController extends Controller{


    public function home(){
        return view('home');
    }
    public function Abot(){
        return view('Abot');
    }
    public function about(){
        return view('about');
    }
    public function support(){
        return view('support');
    }
    public function review(){
        $reviews = new Compact();
        return view('review', ['reviews'=>$reviews->all()]);
    }
    public function reviewCheck(Request $request){
        $valid= $request->validate([
            'email'=>'required| min:3|max:50',
            'subject'=>'required| min:3|max:100',
            'message'=>'required| min:3|max:500',
        ]);
        $review = new Compact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');

    }




}
