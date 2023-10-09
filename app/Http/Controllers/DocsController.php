<?php

namespace App\Http\Controllers;

class DocsController extends Controller
{
    public function index()
    {
        return view('docs.homepage');
    }

    public function product()
    {
        return view('docs.product');
    }

    public function about()
    {
        return view('docs.about');
    }

    public function introduction()
    {
        return view('docs.introduction');
    }

    public function category()
    {
        return view('docs.category');
    }
}
