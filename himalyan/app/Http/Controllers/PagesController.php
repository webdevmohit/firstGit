<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function about(){
    	return view('pages.about');
    }

    public function product(){
    	return view('pages.product');
    }

    public function contact(){
    	return view('pages.contact');
    }
}
