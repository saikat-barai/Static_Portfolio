<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function homePage(){
        $data = [
            'name' => 'Saikat',
            'profession' => 'Laravel Developer'
        ];
        return view('home', compact('data'));
    }
    function aboutPage(){
        return view('about');
    }
    function servicesPage(){
        return view('services');
    }
    function portfolioPage(){
        return view('portfolio');
    }
    function contactPage(){
        return view('contact');
    }
}
