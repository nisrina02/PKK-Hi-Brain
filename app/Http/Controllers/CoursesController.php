<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('courses');
    }

    public function html()
    {
        return view('htmlcourse');
    }

    public function css()
    {
        return view('csscourse');
    }

    public function php()
    {
        return view('phpcourse');
    }

    public function html1()
    {
        return view('html1');
    }

    public function css1()
    {
        return view('css1');
    }

    public function php1()
    {
        return view('php1');
    }

}
