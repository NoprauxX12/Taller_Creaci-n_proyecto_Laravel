<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $data1 = 'About us - Online Store';
        $data2 = 'About us';
        $description = 'This is an about page ...';
        $author = 'Developed by: Your Name';
        $viewData['title'] = $data1;
        $viewData['subtitle'] = $data2;
        $viewData['description'] = $description;
        $viewData['author'] = $author;

        return view('home.about')->with('viewData', $viewData);
    }
}
