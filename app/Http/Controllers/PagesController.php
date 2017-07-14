<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{

    public function firstPage(){
        return view('pages.first_page');
    }

    public function home() {
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function about() {
        return view('about');
    }

    public function login() {
        return view('login');
    }
}
