<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'About - Azriel Akbar Sofyan';
        return view('about.index')->with('viewData', $viewData);
    }
}
