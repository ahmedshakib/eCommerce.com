<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $data['meta_title'] = 'Home';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('home', $data);
    }

    public function about() {
        $data['meta_title'] = 'About us';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('about', $data);
    }

    public function contact() {
        $data['meta_title'] = 'Contact us';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('contact', $data);
    }
}
