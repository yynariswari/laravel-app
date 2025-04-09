<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function contact()
    {
        return view('contact'); // Akan menampilkan file resources/views/contact.blade.php
    }

    function about()
    {
        return view('about'); // Akan menampilkan file resources/views/about.blade.php
    }
}
